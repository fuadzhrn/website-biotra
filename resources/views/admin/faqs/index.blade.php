@extends('layouts.admin')

@section('title', 'Kelola FAQ — Admin BIOTRA')
@section('page_title', 'Kelola FAQ')
@section('page_subtitle', 'Atur pertanyaan yang sering ditanyakan di website BIOTRA')

@section('content')

    <div class="admin-card">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Daftar FAQ Website</h2>
                <p>5 pertanyaan terdaftar — klik Edit untuk mengubah</p>
            </div>
            <button class="admin-button sm" disabled>
                <i class="bi bi-plus-lg"></i>
                Tambah FAQ
            </button>
        </div>

        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width:40px">#</th>
                        <th>Pertanyaan</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th style="width:100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color:var(--text-muted); font-size:12px;">1</td>
                        <td>
                            <div style="font-weight:600; color:var(--navy); margin-bottom:2px;">Apa itu program kemitraan BIOTRA?</div>
                            <div style="font-size:12px; color:var(--text-muted);">Penjelasan umum tentang BIOTRA dan program kemitraannya</div>
                        </td>
                        <td><span class="admin-badge navy">Umum</span></td>
                        <td><span class="admin-badge green"><i class="bi bi-check-circle-fill"></i> Aktif</span></td>
                        <td>
                            <button class="admin-button-outline sm" disabled>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:var(--text-muted); font-size:12px;">2</td>
                        <td>
                            <div style="font-weight:600; color:var(--navy); margin-bottom:2px;">Bagaimana cara mendaftar sebagai mitra BIOTRA?</div>
                            <div style="font-size:12px; color:var(--text-muted);">Langkah-langkah proses pendaftaran kemitraan</div>
                        </td>
                        <td><span class="admin-badge gold">Kemitraan</span></td>
                        <td><span class="admin-badge green"><i class="bi bi-check-circle-fill"></i> Aktif</span></td>
                        <td>
                            <button class="admin-button-outline sm" disabled>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:var(--text-muted); font-size:12px;">3</td>
                        <td>
                            <div style="font-weight:600; color:var(--navy); margin-bottom:2px;">Apa saja layanan yang tersedia di BIOTRA?</div>
                            <div style="font-size:12px; color:var(--text-muted);">Daftar kategori layanan properti dan mobilitas</div>
                        </td>
                        <td><span class="admin-badge navy">Layanan</span></td>
                        <td><span class="admin-badge green"><i class="bi bi-check-circle-fill"></i> Aktif</span></td>
                        <td>
                            <button class="admin-button-outline sm" disabled>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:var(--text-muted); font-size:12px;">4</td>
                        <td>
                            <div style="font-weight:600; color:var(--navy); margin-bottom:2px;">Berapa modal minimum untuk bermitra dengan BIOTRA?</div>
                            <div style="font-size:12px; color:var(--text-muted);">Informasi investasi awal dan struktur biaya bergabung</div>
                        </td>
                        <td><span class="admin-badge gold">Kemitraan</span></td>
                        <td><span class="admin-badge green"><i class="bi bi-check-circle-fill"></i> Aktif</span></td>
                        <td>
                            <button class="admin-button-outline sm" disabled>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:var(--text-muted); font-size:12px;">5</td>
                        <td>
                            <div style="font-weight:600; color:var(--navy); margin-bottom:2px;">Bagaimana sistem pembagian hasil di BIOTRA?</div>
                            <div style="font-size:12px; color:var(--text-muted);">Penjelasan mekanisme bagi hasil antara BIOTRA dan mitra</div>
                        </td>
                        <td><span class="admin-badge gold">Kemitraan</span></td>
                        <td><span class="admin-badge green"><i class="bi bi-check-circle-fill"></i> Aktif</span></td>
                        <td>
                            <button class="admin-button-outline sm" disabled>Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
