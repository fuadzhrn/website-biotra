@extends('layouts.admin')

@section('title', 'Kelola Beranda — Admin BIOTRA')
@section('page_title', 'Kelola Beranda')
@section('page_subtitle', 'Atur konten utama halaman Beranda BIOTRA')

@section('content')

    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Konten Halaman Beranda</h2>
                <p>Pilih seksi yang ingin diedit dan klik tombol Edit Konten</p>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i>
                Pratinjau
            </a>
        </div>

        <div class="admin-placeholder-grid">

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-stars"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Hero Section</div>
                    <div class="admin-placeholder-desc">
                        Atur judul utama, tagline, dan tombol CTA yang muncul pertama kali saat pengunjung membuka website BIOTRA.
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
                    <div class="admin-placeholder-title">Tentang Singkat</div>
                    <div class="admin-placeholder-desc">
                        Tampilkan ringkasan profil BIOTRA di halaman beranda — siapa BIOTRA, apa yang ditawarkan, dan mengapa memilih BIOTRA.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-briefcase"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Produk Utama</div>
                    <div class="admin-placeholder-desc">
                        Tampilkan layanan unggulan BIOTRA (Villa, Hotel, Apartemen, Rental Kendaraan) di halaman beranda sebagai daya tarik utama.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-patch-check"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Keunggulan BIOTRA</div>
                    <div class="admin-placeholder-desc">
                        Atur poin-poin keunggulan dan nilai lebih BIOTRA yang membedakannya dari program kemitraan lain di industri.
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
