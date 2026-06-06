@extends('layouts.admin')

@section('title', 'Dashboard — Admin BIOTRA')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Ringkasan pengelolaan konten website BIOTRA')

@section('content')

    {{-- Welcome Card --}}
    <div class="admin-welcome-card">
        <div class="admin-welcome-body">
            <div class="admin-welcome-badge">
                <i class="bi bi-shield-check"></i>
                Admin Panel
            </div>
            <h1 class="admin-welcome-heading">Selamat Datang di Admin Panel BIOTRA</h1>
            <p class="admin-welcome-text">
                Kelola konten website BIOTRA mulai dari halaman Beranda, Tentang Kami, Produk &amp; Layanan, Kemitraan, hingga Kontak melalui dashboard ini.
            </p>
        </div>
        <div class="admin-welcome-illo">
            <div class="admin-welcome-illo-inner">
                <i class="bi bi-grid-1x2-fill"></i>
            </div>
        </div>
    </div>

    {{-- Stat Cards --}}
    <div class="admin-stat-grid">
        <div class="admin-stat-card">
            <div class="admin-stat-icon navy">
                <i class="bi bi-window"></i>
            </div>
            <div>
                <div class="admin-stat-value">5</div>
                <div class="admin-stat-label">Halaman Website</div>
            </div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-icon gold">
                <i class="bi bi-layers"></i>
            </div>
            <div>
                <div class="admin-stat-value">4</div>
                <div class="admin-stat-label">Konten Layanan</div>
            </div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-icon navy">
                <i class="bi bi-question-circle"></i>
            </div>
            <div>
                <div class="admin-stat-value">5</div>
                <div class="admin-stat-label">FAQ</div>
            </div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-icon green">
                <i class="bi bi-chat-left-dots"></i>
            </div>
            <div>
                <div class="admin-stat-value">0</div>
                <div class="admin-stat-label">Pesan Konsultasi</div>
            </div>
        </div>
    </div>

    {{-- Quick Actions --}}
    <div class="admin-action-grid">
        <a href="{{ route('admin.contents.home') }}" class="admin-action-card">
            <div class="admin-action-icon"><i class="bi bi-house-door"></i></div>
            <div class="admin-action-label">Kelola Beranda</div>
        </a>
        <a href="{{ route('admin.contents.products-services') }}" class="admin-action-card">
            <div class="admin-action-icon"><i class="bi bi-briefcase"></i></div>
            <div class="admin-action-label">Kelola Produk &amp; Layanan</div>
        </a>
        <a href="{{ route('admin.contents.partnership') }}" class="admin-action-card">
            <div class="admin-action-icon"><i class="bi bi-diagram-3"></i></div>
            <div class="admin-action-label">Kelola Kemitraan</div>
        </a>
        <a href="{{ route('admin.contents.contact') }}" class="admin-action-card">
            <div class="admin-action-icon"><i class="bi bi-telephone"></i></div>
            <div class="admin-action-label">Kelola Kontak</div>
        </a>
    </div>

    {{-- Status Konten --}}
    <div class="admin-card">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Status Konten Website</h2>
                <p>Kondisi terkini setiap halaman publik BIOTRA</p>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-box-arrow-up-right"></i>
                Lihat Website
            </a>
        </div>

        <div class="admin-status-list">
            @php
                $pages = [
                    ['name' => 'Beranda',           'url' => '/',             'route' => 'admin.contents.home'],
                    ['name' => 'Tentang Kami',       'url' => '/tentang-kami', 'route' => 'admin.contents.about'],
                    ['name' => 'Produk & Layanan',   'url' => '/produk-layanan', 'route' => 'admin.contents.products-services'],
                    ['name' => 'Kemitraan',          'url' => '/kemitraan',    'route' => 'admin.contents.partnership'],
                    ['name' => 'Kontak',             'url' => '/kontak',       'route' => 'admin.contents.contact'],
                ];
            @endphp

            @foreach($pages as $page)
            <div class="admin-status-item">
                <div class="admin-status-left">
                    <div class="admin-status-dot green"></div>
                    <div>
                        <div class="admin-status-name">{{ $page['name'] }}</div>
                        <div class="admin-status-url">{{ $page['url'] }}</div>
                    </div>
                </div>
                <div class="admin-status-right">
                    <span class="admin-badge green">
                        <i class="bi bi-check-circle-fill"></i>
                        Siap Ditampilkan
                    </span>
                    <a href="{{ route($page['route']) }}" class="admin-status-link">
                        <i class="bi bi-pencil-square"></i>
                        Edit
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
