@extends('layouts.admin')

@section('title', 'Edit Kategori — Admin BIOTRA')
@section('page_title', 'Edit Kategori Produk')
@section('page_subtitle', 'Perbarui informasi kategori: {{ $category->name }}')

@section('content')

@if(session('success'))
<div class="admin-alert-success admin-mb-24">
    <i class="bi bi-check-circle-fill"></i>
    {{ session('success') }}
</div>
@endif

<form action="{{ route('admin.products.categories.update', $category) }}" method="POST">
@csrf @method('PUT')

<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>{{ $category->name }}</h2>
            <p>Slug: <code>{{ $category->slug }}</code></p>
        </div>
        <div style="display:flex; gap:10px; align-items:center;">
            <a href="{{ route('product-details.show', $category->slug) }}" target="_blank" class="admin-button-outline">
                <i class="bi bi-box-arrow-up-right"></i>
                Lihat Halaman
            </a>
            <a href="{{ route('admin.products.categories.index') }}" class="admin-button-outline">
                <i class="bi bi-arrow-left"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="admin-form-body">

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Nama Kategori <span style="color:red">*</span></label>
                <input type="text" name="name" class="admin-form-input"
                       value="{{ old('name', $category->name) }}" required>
                @error('name')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Slug URL</label>
                <input type="text" name="slug" class="admin-form-input"
                       value="{{ old('slug', $category->slug) }}">
                <div class="admin-form-hint">URL: /produk-layanan/<strong>{{ $category->slug }}</strong></div>
                @error('slug')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Label</label>
                <input type="text" name="label" class="admin-form-input"
                       value="{{ old('label', $category->label) }}">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Badge (area/lokasi)</label>
                <input type="text" name="badge" class="admin-form-input"
                       value="{{ old('badge', $category->badge) }}">
            </div>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Subtitle</label>
            <input type="text" name="subtitle" class="admin-form-input"
                   value="{{ old('subtitle', $category->subtitle) }}">
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="description" class="admin-form-textarea" rows="4">{{ old('description', $category->description) }}</textarea>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Breadcrumb</label>
                <input type="text" name="breadcrumb" class="admin-form-input"
                       value="{{ old('breadcrumb', $category->breadcrumb) }}">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Urutan Tampil</label>
                <input type="number" name="sort_order" class="admin-form-input"
                       value="{{ old('sort_order', $category->sort_order) }}" min="0">
            </div>
        </div>

        <div class="admin-form-group">
            <label style="display:flex; align-items:center; gap:8px; cursor:pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $category->is_active) ? 'checked' : '' }}>
                <span class="admin-form-label" style="margin:0;">Aktif (tampil di website)</span>
            </label>
        </div>

    </div>
</div>

<div style="display:flex; gap:12px;">
    <button type="submit" class="admin-button">
        <i class="bi bi-check-lg"></i>
        Simpan Perubahan
    </button>
    <a href="{{ route('admin.products.units.index', ['category' => $category->id]) }}" class="admin-button-outline">
        <i class="bi bi-box-seam"></i>
        Kelola Unit ({{ $category->units_count ?? $category->units()->count() }})
    </a>
    <a href="{{ route('admin.products.categories.index') }}" class="admin-button-outline">Batal</a>
</div>

</form>

@endsection
