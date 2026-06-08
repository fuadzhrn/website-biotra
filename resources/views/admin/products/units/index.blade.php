@extends('layouts.admin')

@section('title', 'Unit Produk — Admin BIOTRA')
@section('page_title', 'Unit Produk')
@section('page_subtitle', 'Kelola unit produk berdasarkan kategori layanan BIOTRA')

@section('content')

@if(session('success'))
<div class="admin-alert-success admin-mb-24">
    <i class="bi bi-check-circle-fill"></i>
    {{ session('success') }}
</div>
@endif

{{-- Filter Kategori --}}
<div class="admin-card admin-mb-24">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Filter Kategori</h2>
        </div>
    </div>
    <div style="padding: 0 24px 20px;">
        <form method="GET" action="{{ route('admin.products.units.index') }}" style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">
            <select name="category_id" class="admin-form-input" style="max-width:260px;">
                <option value="">— Semua Kategori —</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
                @endforeach
            </select>
            <button type="submit" class="admin-button">
                <i class="bi bi-funnel"></i>
                Filter
            </button>
            @if(request('category_id'))
            <a href="{{ route('admin.products.units.index') }}" class="admin-button-outline">Reset</a>
            @endif
        </form>
    </div>
</div>

{{-- Tabel Unit --}}
<div class="admin-card">
    <div class="admin-card-header">
        <div class="admin-card-header-left">
            <h2>Daftar Unit</h2>
            <p>{{ $units->count() }} unit ditemukan</p>
        </div>
        <a href="{{ route('admin.products.units.create') }}" class="admin-button">
            <i class="bi bi-plus-lg"></i>
            Tambah Unit
        </a>
    </div>

    <div class="admin-table-wrapper">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Unit</th>
                    <th>Kategori</th>
                    <th>Lokasi</th>
                    <th>Tipe</th>
                    <th>Jumlah Gallery</th>
                    <th>Urutan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($units as $unit)
                <tr>
                    <td>
                        @if($unit->main_image)
                            <img src="{{ asset('storage/' . $unit->main_image) }}"
                                 style="width:48px; height:40px; object-fit:cover; border-radius:6px; border:1px solid #e5e7eb;">
                        @else
                            <div style="width:48px; height:40px; background:#f3f4f6; border-radius:6px; display:flex; align-items:center; justify-content:center; color:#9ca3af; border:1px solid #e5e7eb;">
                                <i class="bi bi-image"></i>
                            </div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $unit->name }}</strong>
                        @if($unit->slug)
                            <div style="font-size:12px; color:#9ca3af;">{{ $unit->slug }}</div>
                        @endif
                    </td>
                    <td>{{ $unit->category->name }}</td>
                    <td>{{ $unit->location ?? '—' }}</td>
                    <td>{{ $unit->type ?? '—' }}</td>
                    <td>
                        <span class="admin-badge {{ $unit->images_count > 0 ? 'navy' : 'gray' }}">
                            <i class="bi bi-images"></i>
                            {{ $unit->images_count }} foto
                        </span>
                    </td>
                    <td>{{ $unit->sort_order }}</td>
                    <td>
                        <form action="{{ route('admin.products.units.toggle', $unit) }}" method="POST" style="margin:0;">
                            @csrf @method('PATCH')
                            @if($unit->is_active)
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
                            <a href="{{ route('admin.products.units.edit', $unit) }}"
                               class="admin-button-outline sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.products.units.destroy', $unit) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus unit ini? Gallery foto juga akan terhapus.')" style="margin:0;">
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
                    <td colspan="9" style="text-align:center; padding:40px; color:#9ca3af;">
                        Belum ada unit. <a href="{{ route('admin.products.units.create') }}">Tambah sekarang</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
