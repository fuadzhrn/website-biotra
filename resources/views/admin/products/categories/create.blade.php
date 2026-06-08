@extends('layouts.admin')

@section('title', 'Tambah Kategori — Admin BIOTRA')
@section('page_title', 'Tambah Kategori Produk')
@section('page_subtitle', 'Buat kategori produk baru')

@section('content')

<form action="{{ route('admin.products.categories.store') }}" method="POST">
@csrf

<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Informasi Kategori</h2>
        </div>
        <a href="{{ route('admin.products.categories.index') }}" class="admin-button-outline">
            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="admin-form-body">

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Nama Kategori <span style="color:red">*</span></label>
                <input type="text" name="name" class="admin-form-input" value="{{ old('name') }}" required
                       placeholder="cth: Villa &amp; Staycation">
                @error('name')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Slug URL</label>
                <input type="text" name="slug" class="admin-form-input" value="{{ old('slug') }}"
                       placeholder="cth: villa-staycation (otomatis jika kosong)">
                <div class="admin-form-hint">URL: /produk-layanan/<strong>slug</strong></div>
                @error('slug')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label (tampil di halaman)</label>
                <input type="text" name="label" class="admin-form-input" value="{{ old('label') }}"
                       placeholder="cth: Villa &amp; Staycation">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Badge (area/lokasi)</label>
                <input type="text" name="badge" class="admin-form-input" value="{{ old('badge') }}"
                       placeholder="cth: Bali">
            </div>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Subtitle</label>
            <input type="text" name="subtitle" class="admin-form-input" value="{{ old('subtitle') }}"
                   placeholder="Deskripsi singkat kategori">
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="description" class="admin-form-textarea" rows="4"
                      placeholder="Deskripsi lengkap kategori produk">{{ old('description') }}</textarea>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Breadcrumb</label>
                <input type="text" name="breadcrumb" class="admin-form-input" value="{{ old('breadcrumb') }}"
                       placeholder="Teks breadcrumb halaman">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Urutan Tampil</label>
                <input type="number" name="sort_order" class="admin-form-input" value="{{ old('sort_order', 0) }}" min="0">
            </div>
        </div>

        <div class="admin-form-group">
            <label style="display:flex; align-items:center; gap:8px; cursor:pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                <span class="admin-form-label" style="margin:0;">Aktif (tampil di website)</span>
            </label>
        </div>

    </div>
</div>

<div style="display:flex; gap:12px;">
    <button type="submit" class="admin-button">
        <i class="bi bi-check-lg"></i>
        Simpan Kategori
    </button>
    <a href="{{ route('admin.products.categories.index') }}" class="admin-button-outline">Batal</a>
</div>

</form>

@endsection
