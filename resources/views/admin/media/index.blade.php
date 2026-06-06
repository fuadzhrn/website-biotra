@extends('layouts.admin')

@section('title', 'Media Website — Admin BIOTRA')
@section('page_title', 'Media Website')
@section('page_subtitle', 'Kelola gambar yang digunakan pada halaman website BIOTRA')

@section('content')

    <div class="admin-card">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Kategori Media</h2>
                <p>5 kategori media terdaftar untuk halaman website BIOTRA</p>
            </div>
            <button class="admin-button sm" disabled>
                <i class="bi bi-cloud-upload"></i>
                Upload Media
            </button>
        </div>

        <div class="admin-media-grid">

            <div class="admin-media-card">
                <div class="admin-media-thumb">
                    <i class="bi bi-stars"></i>
                </div>
                <div class="admin-media-info">
                    <div class="admin-media-name">Hero Image</div>
                    <div class="admin-media-meta">Halaman Beranda — Background utama</div>
                    <button class="admin-button-outline sm" disabled>
                        <i class="bi bi-images"></i>
                        Kelola Media
                    </button>
                </div>
            </div>

            <div class="admin-media-card">
                <div class="admin-media-thumb">
                    <i class="bi bi-collection"></i>
                </div>
                <div class="admin-media-info">
                    <div class="admin-media-name">About Slider</div>
                    <div class="admin-media-meta">Halaman Tentang Kami — Galeri foto profil</div>
                    <button class="admin-button-outline sm" disabled>
                        <i class="bi bi-images"></i>
                        Kelola Media
                    </button>
                </div>
            </div>

            <div class="admin-media-card">
                <div class="admin-media-thumb">
                    <i class="bi bi-briefcase"></i>
                </div>
                <div class="admin-media-info">
                    <div class="admin-media-name">Produk &amp; Layanan</div>
                    <div class="admin-media-meta">Halaman Produk — Foto villa, hotel, apartemen, kendaraan</div>
                    <button class="admin-button-outline sm" disabled>
                        <i class="bi bi-images"></i>
                        Kelola Media
                    </button>
                </div>
            </div>

            <div class="admin-media-card">
                <div class="admin-media-thumb">
                    <i class="bi bi-diagram-3"></i>
                </div>
                <div class="admin-media-info">
                    <div class="admin-media-name">Kemitraan</div>
                    <div class="admin-media-meta">Halaman Kemitraan — Visual program dan proses</div>
                    <button class="admin-button-outline sm" disabled>
                        <i class="bi bi-images"></i>
                        Kelola Media
                    </button>
                </div>
            </div>

            <div class="admin-media-card">
                <div class="admin-media-thumb">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div class="admin-media-info">
                    <div class="admin-media-name">Kontak</div>
                    <div class="admin-media-meta">Halaman Kontak — Gambar kantor dan lokasi</div>
                    <button class="admin-button-outline sm" disabled>
                        <i class="bi bi-images"></i>
                        Kelola Media
                    </button>
                </div>
            </div>

        </div>
    </div>

@endsection
