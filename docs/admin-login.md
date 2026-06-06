# Dokumentasi Sistem Login Admin BIOTRA

## Daftar Isi

1. [Gambaran Umum](#1-gambaran-umum)
2. [Struktur File](#2-struktur-file)
3. [Alur Kerja Login](#3-alur-kerja-login)
4. [Routes](#4-routes)
5. [Controller](#5-controller)
6. [Middleware](#6-middleware)
7. [Session Variables](#7-session-variables)
8. [Views & Layout](#8-views--layout)
9. [CSS — Referensi Class](#9-css--referensi-class)
10. [JavaScript](#10-javascript)
11. [Kredensial Admin](#11-kredensial-admin)
12. [Upgrade ke Produksi](#12-upgrade-ke-produksi)

---

## 1. Gambaran Umum

Sistem login admin BIOTRA adalah sistem autentikasi sederhana berbasis **session Laravel** yang dirancang khusus untuk admin internal. Sistem ini **terpisah sepenuhnya** dari halaman publik website dan tidak memengaruhi tampilan atau alur user/mitra/pelanggan.

**Teknologi yang digunakan:**
- Laravel 13 (Blade, Session, Middleware)
- CSS murni (tanpa framework)
- JavaScript vanilla (tanpa library)
- Google Fonts: Poppins & Montserrat
- Bootstrap Icons 1.11.1

---

## 2. Struktur File

```
website-biotra/
│
├── resources/views/
│   ├── layouts/
│   │   └── admin-auth.blade.php        ← Layout khusus halaman auth admin
│   ├── auth/
│   │   └── admin-login.blade.php       ← Halaman login admin
│   └── admin/
│       └── dashboard.blade.php         ← Dashboard admin (placeholder)
│
├── public/assets/
│   ├── css/
│   │   └── admin-login.css             ← Semua styling halaman login
│   └── js/
│       └── admin-login.js              ← Password toggle & interaksi
│
├── app/Http/
│   ├── Controllers/Admin/
│   │   └── AuthController.php          ← Logika login, logout
│   └── Middleware/
│       └── AdminAuth.php               ← Proteksi route admin
│
├── routes/
│   └── web.php                         ← Definisi route login & dashboard
│
└── bootstrap/
    └── app.php                         ← Registrasi middleware alias
```

---

## 3. Alur Kerja Login

### Login

```
Browser → GET /admin/login
        → AuthController::showLoginForm()
        → Cek session admin_logged_in
            ├── Ada    → Redirect /admin/dashboard
            └── Tidak  → Tampilkan auth.admin-login
```

```
Browser → POST /admin/login (email + password)
        → AuthController::login()
        → Validasi input (required, format email)
        → Cocokkan dengan kredensial statis
            ├── Cocok  → Set session → Redirect /admin/dashboard
            └── Gagal  → Redirect back + error message + withInput(email)
```

### Akses Dashboard

```
Browser → GET /admin/dashboard
        → Middleware admin.auth
            ├── Session admin_logged_in ada  → Lanjutkan ke view
            └── Session tidak ada           → Redirect /admin/login
```

### Logout

```
Browser → POST /admin/logout
        → AuthController::logout()
        → Hapus session admin_logged_in & admin_email
        → Invalidate session
        → Regenerate CSRF token
        → Redirect /admin/login
```

---

## 4. Routes

File: [routes/web.php](../routes/web.php)

| Method | URI | Name | Handler | Middleware |
|--------|-----|------|---------|------------|
| GET | `/admin/login` | `admin.login` | `AuthController@showLoginForm` | — |
| POST | `/admin/login` | `admin.login.submit` | `AuthController@login` | — |
| POST | `/admin/logout` | `admin.logout` | `AuthController@logout` | — |
| GET | `/admin/dashboard` | `admin.dashboard` | Closure → `admin.dashboard` view | `admin.auth` |

**Penting:** Route publik (`/`, `/tentang-kami`, dll.) tidak disentuh sama sekali.

---

## 5. Controller

File: [app/Http/Controllers/Admin/AuthController.php](../app/Http/Controllers/Admin/AuthController.php)

### `showLoginForm()`

```php
public function showLoginForm(): View|RedirectResponse
```

- Jika session `admin_logged_in` sudah bernilai `true` → redirect ke `admin.dashboard` (mencegah akses halaman login saat sudah login).
- Jika belum login → tampilkan view `auth.admin-login`.

---

### `login(Request $request)`

```php
public function login(Request $request): RedirectResponse
```

**Validasi input:**

| Field | Aturan |
|-------|--------|
| `email` | required, format email valid |
| `password` | required |

**Pesan error validasi** menggunakan Bahasa Indonesia (didefinisikan langsung di array `$messages`).

**Proses autentikasi:**
1. Bandingkan `$request->email` dengan konstanta `ADMIN_EMAIL`.
2. Bandingkan `$request->password` dengan konstanta `ADMIN_PASSWORD`.
3. Jika cocok:
   - Jalankan `$request->session()->regenerate()` untuk mencegah session fixation attack.
   - Simpan session `admin_logged_in = true` dan `admin_email = email`.
   - Redirect ke `admin.dashboard`.
4. Jika tidak cocok:
   - Redirect back dengan error `"Email atau password admin tidak sesuai."`.
   - Kembalikan input `email` saja (password tidak dikembalikan demi keamanan).

---

### `logout(Request $request)`

```php
public function logout(Request $request): RedirectResponse
```

1. Hapus key session `admin_logged_in` dan `admin_email` dengan `session()->forget()`.
2. `$request->session()->invalidate()` — hancurkan semua data session.
3. `$request->session()->regenerateToken()` — buat CSRF token baru.
4. Redirect ke `admin.login`.

---

## 6. Middleware

File: [app/Http/Middleware/AdminAuth.php](../app/Http/Middleware/AdminAuth.php)

```php
public function handle(Request $request, Closure $next): Response
{
    if (! session('admin_logged_in')) {
        return redirect()->route('admin.login');
    }

    return $next($request);
}
```

**Cara kerja:**
- Setiap request ke route yang dilindungi middleware `admin.auth` melewati handler ini.
- Jika session `admin_logged_in` tidak ada atau bernilai falsy → redirect ke halaman login.
- Jika ada → request diteruskan ke handler berikutnya (controller/closure).

**Registrasi alias** di [bootstrap/app.php](../bootstrap/app.php):

```php
$middleware->alias([
    'admin.auth' => \App\Http\Middleware\AdminAuth::class,
]);
```

Alias ini memungkinkan penulisan `->middleware('admin.auth')` pada route.

---

## 7. Session Variables

| Key | Tipe | Nilai | Keterangan |
|-----|------|-------|-----------|
| `admin_logged_in` | `bool` | `true` | Penanda status login admin |
| `admin_email` | `string` | Email admin | Digunakan untuk ditampilkan di dashboard |

**Diset saat:** Login berhasil di `AuthController::login()`.  
**Dihapus saat:** Logout di `AuthController::logout()`.  
**Dicek oleh:** Middleware `AdminAuth` dan `showLoginForm()`.

---

## 8. Views & Layout

### `layouts/admin-auth.blade.php`

Layout dasar halaman auth admin. **Tidak mengandung navbar dan footer** website publik.

Yang dimuat layout ini:
- Google Fonts (Poppins + Montserrat)
- Bootstrap Icons CDN
- `assets/css/admin-login.css`
- `@yield('content')` — konten dari view child
- `assets/js/admin-login.js`

---

### `auth/admin-login.blade.php`

Menggunakan `@extends('layouts.admin-auth')`.

**Struktur halaman (Split Premium Login):**

```
┌─────────────────────────────┬──────────────────────┐
│                             │                      │
│   LEFT PANEL (55%)          │  RIGHT PANEL (45%)   │
│   Background navy gradient  │  Background #F5F6F8  │
│                             │                      │
│   • Logo BIOTRA             │  ┌──────────────┐    │
│   • Badge "BIOTRA Admin"    │  │  Login Card  │    │
│   • Heading utama           │  │              │    │
│   • Deskripsi singkat       │  │  • Icon      │    │
│   • 3 poin fitur            │  │  • Judul     │    │
│   • Dekorasi grid + radial  │  │  • Subtitle  │    │
│                             │  │  • Form      │    │
│                             │  │  • Back link │    │
│                             │  └──────────────┘    │
└─────────────────────────────┴──────────────────────┘
```

**Di mobile (≤768px):** Layout berubah menjadi 1 kolom (left panel di atas, right panel di bawah).

---

### `admin/dashboard.blade.php`

Dashboard placeholder. Menggunakan inline style (tidak bergantung pada `admin-login.css`) sehingga bisa dikembangkan secara independen.

Menampilkan:
- Topbar dengan logo BIOTRA + tombol logout.
- Kartu selamat datang dengan email dari `session('admin_email')`.
- 3 kartu placeholder (Konten Website, Program Kemitraan, Pesan Konsultasi).

---

## 9. CSS — Referensi Class

File: [public/assets/css/admin-login.css](../public/assets/css/admin-login.css)

### Struktur layout

| Class | Keterangan |
|-------|-----------|
| `.admin-login-page` | Wrapper utama, `display: flex`, `min-height: 100vh` |
| `.admin-login-left` | Panel kiri (55%), background navy gradient |
| `.admin-login-left-inner` | Konten dalam panel kiri, `z-index: 2` |
| `.admin-login-right` | Panel kanan (45%), background `#F5F6F8` |
| `.admin-login-card` | Card putih di panel kanan |

### Dekorasi

| Class | Keterangan |
|-------|-----------|
| `.admin-deco-grid` | Pola grid halus dengan warna gold transparan |
| `.admin-deco-radial` | Efek cahaya radial gold di pojok kanan bawah |

### Komponen panel kiri

| Class | Keterangan |
|-------|-----------|
| `.admin-login-brand` | Wrapper logo |
| `.admin-brand-logo` | Logo di-invert menjadi putih |
| `.admin-login-badge` | Badge "BIOTRA Admin" dengan border gold |
| `.admin-login-heading` | Judul besar panel kiri |
| `.admin-login-description` | Paragraf deskripsi panel kiri |
| `.admin-login-features` | List `<ul>` fitur |
| `.admin-feature-item` | Satu item fitur (icon + teks) |
| `.admin-feature-icon` | Kotak ikon kecil dengan background gold transparan |

### Komponen card

| Class | Keterangan |
|-------|-----------|
| `.admin-card-header` | Area judul card, `text-align: center` |
| `.admin-card-icon` | Kotak ikon navy dengan ikon gold |
| `.admin-login-title` | Judul form login |
| `.admin-login-subtitle` | Teks kecil di bawah judul |

### Form

| Class | Keterangan |
|-------|-----------|
| `.admin-login-form` | Container form, `display: flex; flex-direction: column` |
| `.form-group` | Wrapper satu field (label + input) |
| `.form-label` | Label field |
| `.input-wrapper` | Wrapper dengan `position: relative` untuk ikon |
| `.input-icon` | Ikon absolut di kiri input |
| `.form-control` | Input styling — border gold saat focus |
| `.form-control.is-invalid` | Input dengan border merah (error Blade) |
| `.password-wrapper` | Input wrapper khusus password (ada padding kanan) |
| `.password-toggle` | Tombol show/hide password |
| `.form-check` | Wrapper checkbox remember me |
| `.form-check-input` | Checkbox |
| `.form-check-label` | Label checkbox |
| `.admin-login-button` | Tombol submit gold |

### Feedback & navigasi

| Class | Keterangan |
|-------|-----------|
| `.admin-login-error` | Kotak error merah muda |
| `.admin-back-link` | Link "Kembali ke Website" |

### Breakpoints responsive

| Breakpoint | Perubahan |
|-----------|----------|
| `≤ 1024px` | Padding lebih kecil, heading 30px |
| `≤ 768px` | Layout 1 kolom, left panel full width, card full width |
| `≤ 480px` | Padding lebih kecil lagi, heading 22px, font lebih kecil |

---

## 10. JavaScript

File: [public/assets/js/admin-login.js](../public/assets/js/admin-login.js)

### Password Toggle

Menangani klik tombol mata (`.password-toggle`) untuk show/hide password.

**Elemen yang digunakan:**

| ID Elemen | Keterangan |
|-----------|-----------|
| `#passwordToggle` | Tombol toggle (`<button>`) |
| `#password` | Input field password |
| `#passwordToggleIcon` | Ikon `<i>` di dalam tombol |

**Logika:**

```
Klik #passwordToggle
  → Cek type input
      ├── "password" → ubah ke "text"  + ikon bi-eye-slash
      └── "text"     → ubah ke "password" + ikon bi-eye
  → Update aria-label tombol
```

Script dibungkus dalam `DOMContentLoaded` agar DOM sudah siap sebelum event listener dipasang.

---

## 11. Kredensial Admin

> **Perhatian:** Kredensial berikut bersifat **sementara** dan hanya untuk development.

| Field | Nilai |
|-------|-------|
| Email | `admin@biotra.co.id` |
| Password | `admin123` |

Kredensial ini didefinisikan sebagai konstanta private di `AuthController`:

```php
private const ADMIN_EMAIL    = 'admin@biotra.co.id';
private const ADMIN_PASSWORD = 'admin123';
```

---

## 12. Upgrade ke Produksi

Sebelum website di-deploy ke server produksi, lakukan langkah-langkah berikut:

### 1. Pindahkan akun admin ke database

Buat tabel `admins`:

```sql
CREATE TABLE admins (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

### 2. Gunakan Hash untuk password

Saat menyimpan password admin:

```php
use Illuminate\Support\Facades\Hash;

$admin->password = Hash::make('password_baru');
```

Saat memverifikasi login:

```php
if (Hash::check($request->password, $admin->password)) {
    // login berhasil
}
```

### 3. Ganti logika autentikasi di controller

Ganti perbandingan konstanta statis dengan query database:

```php
use App\Models\Admin;

$admin = Admin::where('email', $request->email)->first();

if ($admin && Hash::check($request->password, $admin->password)) {
    // login berhasil
}
```

### 4. Pertimbangkan menggunakan Laravel Auth Guard terpisah

Untuk keamanan lebih kuat, buat **custom guard** untuk admin di `config/auth.php` agar session admin benar-benar terpisah dari mekanisme auth Laravel lainnya.

### 5. Aktifkan HTTPS

Pastikan semua halaman `/admin/*` hanya dapat diakses melalui HTTPS di konfigurasi web server (Nginx/Apache).

---

*Dokumentasi ini mencakup implementasi awal login admin BIOTRA. Perbarui dokumen ini setiap kali ada perubahan signifikan pada sistem autentikasi.*
