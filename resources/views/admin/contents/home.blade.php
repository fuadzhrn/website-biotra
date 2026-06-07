@extends('layouts.admin')

@section('title', 'Kelola Beranda — Admin BIOTRA')
@section('page_title', 'Kelola Beranda')
@section('page_subtitle', 'Atur konten utama halaman Beranda BIOTRA')

@section('content')

@if(session('success'))
    <div class="admin-alert-success">
        <i class="bi bi-check-circle-fill"></i>
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.contents.home.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- ===== HERO SECTION ===== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>
                    <i class="bi bi-stars" style="color:var(--gold); margin-right:8px;"></i>
                    Hero Section
                </h2>
                <p>Judul utama, deskripsi, tombol CTA, dan gambar hero</p>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i>
                Pratinjau
            </a>
        </div>

        <div class="admin-form-body">

            <div class="admin-form-group">
                <label class="admin-form-label">Label Section</label>
                <input type="text" name="hero_label" class="admin-form-input"
                    value="{{ old('hero_label', $content['hero']['label']->value ?? '') }}"
                    placeholder="Program Kemitraan Properti & Mobilitas">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">
                    Judul Hero <span class="admin-form-required">*</span>
                </label>
                <input type="text" name="hero_title" class="admin-form-input"
                    value="{{ old('hero_title', $content['hero']['title']->value ?? '') }}"
                    placeholder="Punya Bisnis Tanpa Ribet di Sektor Properti & Mobilitas">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Hero</label>
                <textarea name="hero_description" class="admin-form-textarea" rows="3"
                    placeholder="BIOTRA membuka akses kemitraan modern untuk properti, penginapan, apartemen, dan rental kendaraan...">{{ old('hero_description', $content['hero']['description']->value ?? '') }}</textarea>
            </div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Teks Tombol Utama</label>
                    <input type="text" name="hero_primary_button_text" class="admin-form-input"
                        value="{{ old('hero_primary_button_text', $content['hero']['primary_button_text']->value ?? '') }}"
                        placeholder="Konsultasi Sekarang">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Link Tombol Utama</label>
                    <input type="text" name="hero_primary_button_link" class="admin-form-input"
                        value="{{ old('hero_primary_button_link', $content['hero']['primary_button_link']->value ?? '') }}"
                        placeholder="/kontak">
                </div>
            </div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Teks Tombol Kedua</label>
                    <input type="text" name="hero_secondary_button_text" class="admin-form-input"
                        value="{{ old('hero_secondary_button_text', $content['hero']['secondary_button_text']->value ?? '') }}"
                        placeholder="Lihat Program">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Link Tombol Kedua</label>
                    <input type="text" name="hero_secondary_button_link" class="admin-form-input"
                        value="{{ old('hero_secondary_button_link', $content['hero']['secondary_button_link']->value ?? '') }}"
                        placeholder="/kemitraan">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Gambar Hero</label>
                <div class="admin-form-image-row">
                    <div class="admin-form-image-preview">
                        @if(!empty($content['hero']['image']->image_path))
                            <img src="{{ asset('storage/' . $content['hero']['image']->image_path) }}" alt="Hero">
                        @else
                            <img src="{{ asset('assets/img/hero/hero-biotra.jpg') }}" alt="Hero Default">
                        @endif
                    </div>
                    <div class="admin-form-image-upload">
                        <input type="file" name="hero_image" class="admin-form-file"
                            accept="image/jpg,image/jpeg,image/png,image/webp">
                        <p class="admin-form-hint">
                            JPG, PNG, WebP. Maks 4MB.
                            Biarkan kosong untuk mempertahankan gambar saat ini.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- ===== TENTANG SINGKAT ===== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>
                    <i class="bi bi-building" style="color:var(--gold); margin-right:8px;"></i>
                    Tentang Singkat
                </h2>
                <p>Ringkasan profil BIOTRA di halaman beranda</p>
            </div>
        </div>

        <div class="admin-form-body">

            <div class="admin-form-group">
                <label class="admin-form-label">Label Section</label>
                <input type="text" name="about_short_label" class="admin-form-input"
                    value="{{ old('about_short_label', $content['about_short']['label']->value ?? '') }}"
                    placeholder="Tentang BIOTRA">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="about_short_title" class="admin-form-input"
                    value="{{ old('about_short_title', $content['about_short']['title']->value ?? '') }}"
                    placeholder="Program Kemitraan Modern untuk Properti, Pariwisata, dan Mobilitas">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi</label>
                <textarea name="about_short_description" class="admin-form-textarea" rows="4"
                    placeholder="BIOTRA adalah program kemitraan modern yang bergerak di sektor properti...">{{ old('about_short_description', $content['about_short']['description']->value ?? '') }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Gambar</label>
                <div class="admin-form-image-row">
                    <div class="admin-form-image-preview">
                        @if(!empty($content['about_short']['image']->image_path))
                            <img src="{{ asset('storage/' . $content['about_short']['image']->image_path) }}" alt="About">
                        @else
                            <img src="{{ asset('assets/img/about/about-biotra.jpg') }}" alt="About Default">
                        @endif
                    </div>
                    <div class="admin-form-image-upload">
                        <input type="file" name="about_image" class="admin-form-file"
                            accept="image/jpg,image/jpeg,image/png,image/webp">
                        <p class="admin-form-hint">
                            JPG, PNG, WebP. Maks 4MB.
                            Biarkan kosong untuk mempertahankan gambar saat ini.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- ===== PRODUK UTAMA ===== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>
                    <i class="bi bi-briefcase" style="color:var(--gold); margin-right:8px;"></i>
                    Produk Utama
                </h2>
                <p>Judul dan deskripsi section Produk Utama</p>
            </div>
        </div>

        <div class="admin-form-body">

            <div class="admin-form-group">
                <label class="admin-form-label">Label Section</label>
                <input type="text" name="products_label" class="admin-form-input"
                    value="{{ old('products_label', $content['products']['label']->value ?? '') }}"
                    placeholder="Produk BIOTRA">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="products_title" class="admin-form-input"
                    value="{{ old('products_title', $content['products']['title']->value ?? '') }}"
                    placeholder="Produk Utama & Area Bisnis BIOTRA">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi</label>
                <textarea name="products_description" class="admin-form-textarea" rows="3"
                    placeholder="BIOTRA menghadirkan beberapa sektor bisnis yang berkaitan dengan kebutuhan akomodasi...">{{ old('products_description', $content['products']['description']->value ?? '') }}</textarea>
            </div>

            <div class="admin-form-notice">
                <i class="bi bi-info-circle" style="color:var(--gold); flex-shrink:0;"></i>
                <span>
                    Detail card produk (Villa, Hotel, Apartemen, Rental Kendaraan) dikelola melalui
                    menu <strong>Kelola Produk</strong> di sidebar.
                </span>
            </div>

        </div>
    </div>

    {{-- ===== KEUNGGULAN BIOTRA ===== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>
                    <i class="bi bi-patch-check" style="color:var(--gold); margin-right:8px;"></i>
                    Keunggulan BIOTRA
                </h2>
                <p>Judul dan deskripsi section Keunggulan</p>
            </div>
        </div>

        <div class="admin-form-body">

            <div class="admin-form-group">
                <label class="admin-form-label">Label Section</label>
                <input type="text" name="advantages_label" class="admin-form-input"
                    value="{{ old('advantages_label', $content['advantages']['label']->value ?? '') }}"
                    placeholder="Keunggulan BIOTRA">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Judul</label>
                <input type="text" name="advantages_title" class="admin-form-input"
                    value="{{ old('advantages_title', $content['advantages']['title']->value ?? '') }}"
                    placeholder="Dirancang untuk Mitra yang Ingin Punya Bisnis Tanpa Ribet">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi</label>
                <textarea name="advantages_description" class="admin-form-textarea" rows="3"
                    placeholder="Program BIOTRA membantu mitra memiliki akses bisnis tanpa harus repot mengurus operasional harian.">{{ old('advantages_description', $content['advantages']['description']->value ?? '') }}</textarea>
            </div>

            <div class="admin-form-notice">
                <i class="bi bi-info-circle" style="color:var(--gold); flex-shrink:0;"></i>
                <span>
                    Card keunggulan individual akan dapat diedit pada pembaruan berikutnya.
                </span>
            </div>

        </div>
    </div>

    {{-- ===== SUBMIT ===== --}}
    <div style="display:flex; justify-content:flex-end; gap:12px; margin-bottom:8px;">
        <a href="{{ route('home') }}" target="_blank" class="admin-button-outline">
            <i class="bi bi-eye"></i>
            Pratinjau Halaman
        </a>
        <button type="submit" class="admin-button">
            <i class="bi bi-check-lg"></i>
            Simpan Perubahan
        </button>
    </div>

</form>

@endsection
