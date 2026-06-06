@extends('layouts.admin')

@section('title', 'Kelola Produk & Layanan — Admin BIOTRA')
@section('page_title', 'Kelola Produk & Layanan')
@section('page_subtitle', 'Atur informasi layanan villa, hotel, apartemen, dan rental kendaraan')

@section('content')

    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Konten Halaman Produk &amp; Layanan</h2>
                <p>Pilih kategori layanan yang ingin diedit dan klik tombol Edit Konten</p>
            </div>
            <a href="{{ route('products-services') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i>
                Pratinjau
            </a>
        </div>

        <div class="admin-placeholder-grid">

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-house-heart"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Villa &amp; Staycation</div>
                    <div class="admin-placeholder-desc">
                        Kelola informasi, deskripsi fasilitas, harga, dan gambar layanan villa &amp; staycation yang tersedia di program BIOTRA.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-building"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Hotel &amp; Penginapan</div>
                    <div class="admin-placeholder-desc">
                        Kelola informasi layanan hotel dan penginapan — tipe kamar, fasilitas, dan ketentuan kemitraan properti perhotelan.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-door-closed"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Apartemen Harian &amp; Mingguan</div>
                    <div class="admin-placeholder-desc">
                        Atur detail layanan apartemen BIOTRA — pilihan unit, harga per periode, lokasi, dan fasilitas yang tersedia.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-car-front"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Rental Kendaraan</div>
                    <div class="admin-placeholder-desc">
                        Kelola informasi layanan rental kendaraan BIOTRA — armada, tarif, area layanan, dan ketentuan penggunaan.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-collection"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Galeri Gambar Layanan</div>
                    <div class="admin-placeholder-desc">
                        Atur galeri foto dan media visual untuk halaman Produk &amp; Layanan — foto properti, kendaraan, dan suasana layanan.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

        </div>
    </div>

@endsection
