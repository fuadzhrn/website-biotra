@extends('layouts.admin')

@section('title', 'Tambah Unit — Admin BIOTRA')
@section('page_title', 'Tambah Unit Produk')
@section('page_subtitle', 'Tambah unit baru ke salah satu kategori produk')

@section('content')

<form action="{{ route('admin.products.units.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Informasi Unit</h2>
        </div>
        <a href="{{ route('admin.products.units.index') }}" class="admin-button-outline">
            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="admin-form-body">

        <div class="admin-form-group">
            <label class="admin-form-label">Kategori Produk <span style="color:red">*</span></label>
            <select name="product_category_id" class="admin-form-input" required>
                <option value="">— Pilih Kategori —</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ old('product_category_id') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
                @endforeach
            </select>
            @error('product_category_id')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Nama Unit <span style="color:red">*</span></label>
                <input type="text" name="name" class="admin-form-input"
                       value="{{ old('name') }}" required
                       placeholder="cth: Villa Jimbaran Premium">
                @error('name')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Slug</label>
                <input type="text" name="slug" class="admin-form-input"
                       value="{{ old('slug') }}"
                       placeholder="cth: villa-jimbaran (otomatis jika kosong)">
                <div class="admin-form-hint">Harus unik dalam satu kategori. Otomatis dibuat dari nama jika kosong.</div>
                @error('slug')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Lokasi</label>
                <input type="text" name="location" class="admin-form-input"
                       value="{{ old('location') }}"
                       placeholder="cth: Jimbaran, Bali">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Tipe Unit</label>
                <input type="text" name="type" class="admin-form-input"
                       value="{{ old('type') }}"
                       placeholder="cth: Villa 2 Kamar">
            </div>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="description" class="admin-form-textarea" rows="3"
                      placeholder="Deskripsi singkat unit">{{ old('description') }}</textarea>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Fitur / Fasilitas</label>
            <textarea name="features" class="admin-form-textarea" rows="5"
                      placeholder="Satu fitur per baris, cth:&#10;Private Pool&#10;AC &amp; WiFi&#10;Dapur Lengkap">{{ old('features') }}</textarea>
            <div class="admin-form-hint">Tulis satu fitur per baris. Ditampilkan sebagai chip di halaman produk.</div>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Urutan Tampil</label>
                <input type="number" name="sort_order" class="admin-form-input"
                       value="{{ old('sort_order', 0) }}" min="0">
            </div>
            <div class="admin-form-group" style="display:flex; align-items:flex-end; padding-bottom:4px;">
                <label style="display:flex; align-items:center; gap:8px; cursor:pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span class="admin-form-label" style="margin:0;">Aktif (tampil di website)</span>
                </label>
            </div>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Foto Utama</label>
            <input type="file" name="main_image" class="admin-form-file" accept="image/jpg,image/jpeg,image/png,image/webp"
                   onchange="previewImg(this, 'main-preview')">
            <div class="admin-form-image-preview" id="main-preview" style="display:none;">
                <img id="main-preview-img" src="" alt="Preview">
            </div>
            <div class="admin-form-hint">Format: JPG, JPEG, PNG, WEBP. Maks 4MB. Gallery foto bisa diupload setelah unit disimpan.</div>
            @error('main_image')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
        </div>

    </div>
</div>

<div style="display:flex; gap:12px;">
    <button type="submit" class="admin-button">
        <i class="bi bi-check-lg"></i>
        Simpan Unit
    </button>
    <a href="{{ route('admin.products.units.index') }}" class="admin-button-outline">Batal</a>
</div>

</form>

<script>
function previewImg(input, previewId) {
    const preview = document.getElementById(previewId);
    const img = document.getElementById(previewId + '-img');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => { img.src = e.target.result; preview.style.display = 'block'; };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

@endsection
