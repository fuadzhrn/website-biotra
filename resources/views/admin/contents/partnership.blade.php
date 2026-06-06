@extends('layouts.admin')

@section('title', 'Kelola Kemitraan — Admin BIOTRA')
@section('page_title', 'Kelola Kemitraan')
@section('page_subtitle', 'Atur informasi program kemitraan BIOTRA')

@section('content')

    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Konten Halaman Kemitraan</h2>
                <p>Pilih seksi yang ingin diedit dan klik tombol Edit Konten</p>
            </div>
            <a href="{{ route('partnership') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i>
                Pratinjau
            </a>
        </div>

        <div class="admin-placeholder-grid">

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Peluang Industri</div>
                    <div class="admin-placeholder-desc">
                        Atur data, statistik, dan narasi tentang peluang industri properti dan mobilitas yang ditampilkan untuk meyakinkan calon mitra.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-arrow-right-circle"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Cara Kerja Kemitraan</div>
                    <div class="admin-placeholder-desc">
                        Jelaskan langkah-langkah proses bergabung menjadi mitra BIOTRA — dari pendaftaran hingga mulai beroperasi.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-gift"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Benefit Mitra</div>
                    <div class="admin-placeholder-desc">
                        Tampilkan keuntungan, fasilitas, dan dukungan yang didapatkan mitra BIOTRA setelah bergabung dalam program kemitraan.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-wallet2"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Paket / Biaya Bergabung</div>
                    <div class="admin-placeholder-desc">
                        Kelola informasi paket kemitraan, struktur biaya investasi awal, dan ketentuan yang berlaku untuk setiap paket.
                    </div>
                    <button class="admin-button sm" disabled>
                        <i class="bi bi-pencil-square"></i>
                        Edit Konten
                    </button>
                </div>
            </div>

            <div class="admin-placeholder-card">
                <div class="admin-placeholder-icon">
                    <i class="bi bi-calculator"></i>
                </div>
                <div class="admin-placeholder-body">
                    <div class="admin-placeholder-title">Simulasi Potensi Hasil</div>
                    <div class="admin-placeholder-desc">
                        Atur data dan parameter simulasi perhitungan potensi penghasilan mitra — asumsi occupancy, tarif, dan bagi hasil.
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
