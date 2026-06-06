@extends('layouts.admin')

@section('title', 'Pesan Konsultasi — Admin BIOTRA')
@section('page_title', 'Pesan Konsultasi')
@section('page_subtitle', 'Pantau data konsultasi yang masuk dari website')

@section('content')

    <div class="admin-card">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Inbox Pesan Konsultasi</h2>
                <p>Pesan dari form konsultasi halaman Kontak</p>
            </div>
            <span class="admin-badge gray">
                <i class="bi bi-inbox"></i>
                0 Pesan
            </span>
        </div>

        <div class="admin-empty-state">
            <div class="admin-empty-icon">
                <i class="bi bi-chat-left-dots"></i>
            </div>
            <h3>Belum Ada Pesan Konsultasi</h3>
            <p>
                Pesan konsultasi dari form website akan tampil di halaman ini setelah fitur penyimpanan data diaktifkan.
            </p>
            <button class="admin-button" disabled>
                <i class="bi bi-clock-history"></i>
                Fitur Akan Datang
            </button>
        </div>
    </div>

@endsection
