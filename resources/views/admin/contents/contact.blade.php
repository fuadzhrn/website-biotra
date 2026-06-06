@extends('layouts.admin')

@section('title', 'Kelola Kontak — Admin BIOTRA')
@section('page_title', 'Kelola Kontak')
@section('page_subtitle', 'Atur informasi kontak, lokasi, form konsultasi, dan FAQ kontak')

@section('content')

    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Konten Halaman Kontak</h2>
                <p>Pilih seksi yang ingin diedit dan klik tombol Edit Konten</p>
            </div>
            <a href="{{ route('contact') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i>
                Pratinjau
            </a>
        </div>

        <div class="admin-placeholder-grid">

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Informasi Kontak</div>
                    <div class="admin-placeholder-desc">
                        Atur nomor telepon, WhatsApp, email, dan alamat kantor BIOTRA yang ditampilkan di halaman kontak website.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-ui-checks-grid"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Form Konsultasi</div>
                    <div class="admin-placeholder-desc">
                        Kelola pertanyaan, field, dan teks panduan yang muncul di form konsultasi website BIOTRA.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Lokasi &amp; Google Maps</div>
                    <div class="admin-placeholder-desc">
                        Atur link embed Google Maps dan informasi lokasi kantor BIOTRA yang ditampilkan di halaman kontak.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-patch-question"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">FAQ Kontak</div>
                    <div class="admin-placeholder-desc">
                        Kelola pertanyaan umum seputar cara menghubungi, jam operasional, dan respons BIOTRA yang ditampilkan di halaman kontak.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-megaphone"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">CTA Kontak</div>
                    <div class="admin-placeholder-desc">
                        Atur teks, sub-teks, dan link tombol ajakan bertindak (Call to Action) di bagian bawah halaman kontak BIOTRA.
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
