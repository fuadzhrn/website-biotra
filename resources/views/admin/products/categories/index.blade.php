@extends('layouts.admin')

@section('title', 'Kategori Produk — Admin BIOTRA')
@section('page_title', 'Kategori Produk')
@section('page_subtitle', 'Kelola kategori produk yang ditampilkan di halaman detail produk')

@section('content')

@if(session('success'))
<div class="admin-alert-success admin-mb-24">
    <i class="bi bi-check-circle-fill"></i>
    {{ session('success') }}
</div>
@endif

<div class="admin-card">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Daftar Kategori</h2>
            <p>{{ $categories->count() }} kategori terdaftar</p>
        </div>
        <a href="{{ route('admin.products.categories.create') }}" class="admin-button">
            <i class="bi bi-plus-lg"></i>
            Tambah Kategori
        </a>
    </div>

    <div class="admin-table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Slug</th>
                    <th>Badge</th>
                    <th>Urutan</th>
                    <th>Jumlah Unit</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr>
                    <td>
                        <strong>{{ $category->name }}</strong>
                        @if($category->label && $category->label !== $category->name)
                            <div style="font-size:12px; color:#888;">{{ $category->label }}</div>
                        @endif
                    </td>
                    <td><code>{{ $category->slug }}</code></td>
                    <td>{{ $category->badge ?? '—' }}</td>
                    <td>{{ $category->sort_order }}</td>
                    <td>{{ $category->units_count }} unit</td>
                    <td>
                        <form action="{{ route('admin.products.categories.toggle', $category) }}" method="POST" style="margin:0;">
                            @csrf @method('PATCH')
                            @if($category->is_active)
                                <button type="submit" class="admin-badge green"
                                        style="cursor:pointer; border:none; background:none; padding:0;"
                                        title="Klik untuk nonaktifkan">
                                    <i class="bi bi-toggle-on"></i> Aktif
                                </button>
                            @else
                                <button type="submit" class="admin-badge gray"
                                        style="cursor:pointer; border:none; background:none; padding:0;"
                                        title="Klik untuk aktifkan">
                                    <i class="bi bi-toggle-off"></i> Nonaktif
                                </button>
                            @endif
                        </form>
                    </td>
                    <td>
                        <div style="display:flex; gap:6px; align-items:center;">
                            <a href="{{ route('product-details.show', $category->slug) }}" target="_blank"
                               class="admin-button-outline sm" title="Lihat halaman">
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                            <a href="{{ route('admin.products.categories.edit', $category) }}"
                               class="admin-button-outline sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.products.categories.destroy', $category) }}" method="POST"
                                  onsubmit="return confirm('Hapus kategori ini? Semua unit di dalamnya juga akan terhapus.')" style="margin:0;">
                                @csrf @method('DELETE')
                                <button type="submit" class="admin-button-outline sm"
                                        style="color:#e53935; border-color:#e53935;">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align:center; padding: 40px; color: #888;">
                        Belum ada kategori. <a href="{{ route('admin.products.categories.create') }}">Tambah sekarang</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
