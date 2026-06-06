@extends('layouts.admin-auth')

@section('title', 'Login Admin — BIOTRA')

@section('content')
<div class="admin-login-page">

    {{-- LEFT PANEL --}}
    <div class="admin-login-left">
        <div class="admin-login-left-inner">

            <div class="admin-deco-grid"></div>
            <div class="admin-deco-radial"></div>

            <div class="admin-login-brand">
                <img src="{{ asset('assets/img/logo-biotra.png') }}" alt="BIOTRA" class="admin-brand-logo">
            </div>

            <div class="admin-login-badge">
                <i class="bi bi-shield-lock-fill"></i>
                BIOTRA Admin
            </div>

            <h1 class="admin-login-heading">
                Kelola Website BIOTRA dengan Lebih Mudah
            </h1>

            <p class="admin-login-description">
                Masuk ke dashboard admin untuk mengelola informasi website, konten layanan, program kemitraan, kontak, dan kebutuhan operasional digital BIOTRA.
            </p>

            <ul class="admin-login-features">
                <li class="admin-feature-item">
                    <span class="admin-feature-icon"><i class="bi bi-pencil-square"></i></span>
                    <span>Kelola konten website</span>
                </li>
                <li class="admin-feature-item">
                    <span class="admin-feature-icon"><i class="bi bi-arrow-repeat"></i></span>
                    <span>Perbarui informasi program</span>
                </li>
                <li class="admin-feature-item">
                    <span class="admin-feature-icon"><i class="bi bi-chat-dots"></i></span>
                    <span>Pantau kebutuhan konsultasi</span>
                </li>
            </ul>

        </div>
    </div>

    {{-- RIGHT PANEL --}}
    <div class="admin-login-right">
        <div class="admin-login-card">

            <div class="admin-card-header">
                <div class="admin-card-icon">
                    <i class="bi bi-person-lock"></i>
                </div>
                <h2 class="admin-login-title">Masuk ke Dashboard</h2>
                <p class="admin-login-subtitle">
                    Gunakan akun admin yang sudah terdaftar untuk mengakses dashboard BIOTRA.
                </p>
            </div>

            @if ($errors->any())
                <div class="admin-login-error">
                    <i class="bi bi-exclamation-circle-fill"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form class="admin-login-form" action="{{ route('admin.login.submit') }}" method="POST" novalidate>
                @csrf

                <div class="form-group">
                    <label class="form-label" for="email">Email Admin</label>
                    <div class="input-wrapper">
                        <span class="input-icon"><i class="bi bi-envelope"></i></span>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="admin@biotra.co.id"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-wrapper password-wrapper">
                        <span class="input-icon"><i class="bi bi-lock"></i></span>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >
                        <button type="button" class="password-toggle" id="passwordToggle" aria-label="Tampilkan password">
                            <i class="bi bi-eye" id="passwordToggleIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input" value="1">
                    <label for="remember" class="form-check-label">Ingat saya di perangkat ini</label>
                </div>

                <button type="submit" class="admin-login-button">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Masuk Dashboard
                </button>

            </form>

            <div class="admin-back-link">
                <a href="{{ route('home') }}">
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke Website
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
