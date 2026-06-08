@extends('layouts.admin')

@section('title', 'Edit Unit — Admin BIOTRA')
@section('page_title', 'Edit Unit Produk')
@section('page_subtitle', 'Perbarui informasi dan gallery foto unit')

@section('content')

@if(session('success'))
<div class="admin-alert-success admin-mb-24">
    <i class="bi bi-check-circle-fill"></i>
    {{ session('success') }}
</div>
@endif

{{-- Form Edit Unit --}}
<form action="{{ route('admin.products.units.update', $unit) }}" method="POST" enctype="multipart/form-data">
@csrf @method('PUT')

<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>{{ $unit->name }}</h2>
            <p>Kategori: {{ $unit->category->name }}</p>
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
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $unit->product_category_id == $cat->id ? 'selected' : '' }}>
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
                       value="{{ old('name', $unit->name) }}" required>
                @error('name')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Slug</label>
                <input type="text" name="slug" class="admin-form-input"
                       value="{{ old('slug', $unit->slug) }}">
                <div class="admin-form-hint">Harus unik dalam satu kategori. Otomatis dibuat dari nama jika kosong.</div>
                @error('slug')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Lokasi</label>
                <input type="text" name="location" class="admin-form-input"
                       value="{{ old('location', $unit->location) }}">
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Tipe Unit</label>
                <input type="text" name="type" class="admin-form-input"
                       value="{{ old('type', $unit->type) }}">
            </div>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Deskripsi</label>
            <textarea name="description" class="admin-form-textarea" rows="3">{{ old('description', $unit->description) }}</textarea>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Fitur / Fasilitas</label>
            <textarea name="features" class="admin-form-textarea" rows="5"
                      placeholder="Satu fitur per baris">{{ old('features', $unit->features) }}</textarea>
            <div class="admin-form-hint">Tulis satu fitur per baris. Ditampilkan sebagai chip di halaman produk.</div>
        </div>

        <div class="admin-form-row">
            <div class="admin-form-group">
                <label class="admin-form-label">Urutan Tampil</label>
                <input type="number" name="sort_order" class="admin-form-input"
                       value="{{ old('sort_order', $unit->sort_order) }}" min="0">
            </div>
            <div class="admin-form-group" style="display:flex; align-items:flex-end; padding-bottom:4px;">
                <label style="display:flex; align-items:center; gap:8px; cursor:pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $unit->is_active) ? 'checked' : '' }}>
                    <span class="admin-form-label" style="margin:0;">Aktif (tampil di website)</span>
                </label>
            </div>
        </div>

        <div class="admin-form-group">
            <label class="admin-form-label">Ganti Foto Utama</label>
            @if($unit->main_image)
            <div class="admin-form-image-preview" style="margin-bottom:10px;">
                <img src="{{ asset('storage/' . $unit->main_image) }}" alt="{{ $unit->name }}">
            </div>
            @endif
            <input type="file" name="main_image" class="admin-form-file"
                   accept="image/jpg,image/jpeg,image/png,image/webp"
                   onchange="previewImg(this, 'main-preview')">
            <div class="admin-form-image-preview" id="main-preview" style="display:none;">
                <img id="main-preview-img" src="" alt="Preview Baru">
            </div>
            <div class="admin-form-hint">Kosongkan jika tidak ingin mengganti foto. Format: JPG, JPEG, PNG, WEBP. Maks 4MB.</div>
            @error('main_image')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
        </div>

    </div>
</div>

<div style="display:flex; gap:12px; margin-bottom:32px;">
    <button type="submit" class="admin-button">
        <i class="bi bi-check-lg"></i>
        Simpan Perubahan
    </button>
    <a href="{{ route('admin.products.units.index') }}" class="admin-button-outline">Kembali ke Daftar</a>
</div>

</form>

{{-- ================================
     Gallery Foto Unit
================================ --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Gallery Foto Unit</h2>
            <p>{{ $unit->images->count() }} foto tersimpan</p>
        </div>
    </div>

    {{-- Foto existing --}}
    @if($unit->images->count() > 0)
    <div style="padding: 0 24px 24px;">
        <div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap:16px; margin-bottom:8px;">
            @foreach($unit->images as $img)
            <div style="border:1px solid #e5e7eb; border-radius:10px; overflow:hidden; background:#fff;">
                <img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->alt_text }}"
                     style="width:100%; height:130px; object-fit:cover; display:block;">
                <div style="padding:10px;">
                    <form action="{{ route('admin.products.images.update', $img) }}" method="POST" style="margin-bottom:8px;">
                        @csrf @method('PATCH')
                        <div style="display:flex; gap:4px; margin-bottom:6px;">
                            <input type="text" name="alt_text" class="admin-form-input"
                                   value="{{ $img->alt_text }}" placeholder="Alt text"
                                   style="font-size:12px; padding:4px 8px; flex:1;">
                            <input type="number" name="sort_order" class="admin-form-input"
                                   value="{{ $img->sort_order }}" min="0"
                                   style="font-size:12px; padding:4px 6px; width:52px;" title="Urutan">
                        </div>
                        <button type="submit" class="admin-button-outline sm" style="width:100%; justify-content:center;">
                            <i class="bi bi-check-lg"></i> Update
                        </button>
                    </form>
                    <form action="{{ route('admin.products.images.destroy', $img) }}" method="POST"
                          onsubmit="return confirm('Hapus foto ini?')" style="margin:0;">
                        @csrf @method('DELETE')
                        <button type="submit" class="admin-button-outline sm"
                                style="width:100%; justify-content:center; color:#e53935; border-color:#e53935;">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div style="padding: 16px 24px; color:#9ca3af; font-size:14px;">
        Belum ada foto gallery. Upload foto di bawah.
    </div>
    @endif

    {{-- Upload foto baru --}}
    <div style="border-top:1px solid #f3f4f6; padding: 20px 24px 24px;">
        <h3 style="font-size:14px; font-weight:600; color:var(--navy); margin-bottom:14px;">
            <i class="bi bi-cloud-upload" style="margin-right:6px;"></i>Upload Foto Gallery
        </h3>
        <form action="{{ route('admin.products.units.images.store', $unit) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="admin-form-group">
                <label class="admin-form-label">Pilih Foto</label>
                <input type="file" name="images[]" class="admin-form-file"
                       accept="image/jpg,image/jpeg,image/png,image/webp" multiple
                       onchange="previewMultiple(this)">
                <div id="multi-preview" style="display:flex; gap:8px; flex-wrap:wrap; margin-top:10px;"></div>
                <div class="admin-form-hint">Bisa pilih beberapa foto sekaligus. Format: JPG, JPEG, PNG, WEBP. Maks 4MB per foto.</div>
                @error('images')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
                @error('images.*')<div class="admin-form-hint" style="color:#e53935">{{ $message }}</div>@enderror
            </div>
            <div class="admin-form-group">
                <label class="admin-form-label">Alt Text (opsional)</label>
                <input type="text" name="alt_text" class="admin-form-input"
                       placeholder="Keterangan foto, cth: Tampak depan villa">
            </div>
            <button type="submit" class="admin-button">
                <i class="bi bi-cloud-upload"></i>
                Upload Gallery
            </button>
        </form>
    </div>
</div>

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
function previewMultiple(input) {
    const container = document.getElementById('multi-preview');
    container.innerHTML = '';
    Array.from(input.files).forEach(file => {
        const reader = new FileReader();
        reader.onload = e => {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.cssText = 'width:80px;height:60px;object-fit:cover;border-radius:6px;border:1px solid #e5e7eb;';
            container.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
}
</script>

@endsection
