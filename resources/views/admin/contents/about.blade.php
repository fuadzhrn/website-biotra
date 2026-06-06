@extends('layouts.admin')

@section('title', 'Kelola Tentang Kami — Admin BIOTRA')
@section('page_title', 'Kelola Tentang Kami')
@section('page_subtitle', 'Atur profil, konsep bisnis, area operasional, dan alasan BIOTRA hadir')

@section('content')

    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Konten Halaman Tentang Kami</h2>
                <p>Pilih seksi yang ingin diedit dan klik tombol Edit Konten</p>
            </div>
            <a href="{{ route('about') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i>
                Pratinjau
            </a>
        </div>

        <div class="admin-placeholder-grid">

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-building-fill"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Profil BIOTRA</div>
                    <div class="admin-placeholder-desc">
                        Informasi lengkap tentang visi, misi, dan profil perusahaan BIOTRA yang ditampilkan di halaman Tentang Kami.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Konsep Bisnis</div>
                    <div class="admin-placeholder-desc">
                        Penjelasan model dan konsep bisnis kemitraan BIOTRA — bagaimana sistem bekerja dan mengapa model ini menguntungkan.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Area Operasional</div>
                    <div class="admin-placeholder-desc">
                        Atur informasi wilayah operasional BIOTRA — kota, provinsi, dan cakupan layanan yang tersedia untuk calon mitra.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-journal-text"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Alasan BIOTRA Hadir</div>
                    <div class="admin-placeholder-desc">
                        Tampilkan latar belakang dan alasan berdirinya BIOTRA — masalah apa yang ingin diselesaikan dan peluang apa yang dimanfaatkan.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-images"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Slider Gambar Profil</div>
                    <div class="admin-placeholder-desc">
                        Kelola galeri foto dan slider yang ditampilkan di halaman Tentang Kami — foto kantor, tim, atau kegiatan operasional BIOTRA.
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
