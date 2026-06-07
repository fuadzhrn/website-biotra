@extends('layouts.admin')

@section('title', 'Kelola Tentang Kami — Admin BIOTRA')
@section('page_title', 'Kelola Tentang Kami')
@section('page_subtitle', 'Atur profil, konsep bisnis, area operasional, dan alasan BIOTRA hadir')

@section('content')

@if(session('success'))
    <div class="admin-alert-success admin-mb-24">
        <i class="bi bi-check-circle-fill"></i>
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.contents.about.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- =====================================================
         CARD 1: Profil BIOTRA
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Profil BIOTRA</h2>
                <p>Teks pengantar, sektor, stat cards, dan slider gambar</p>
            </div>
            <a href="{{ route('about') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i> Pratinjau
            </a>
        </div>

        <div class="admin-form-body">

            {{-- Teks Utama --}}
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Teks Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="profile_label" class="admin-form-input"
                        value="{{ $content['profile']['label']->value ?? 'Tentang BIOTRA' }}"
                        placeholder="Tentang BIOTRA">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Utama (H1)</label>
                    <input type="text" name="profile_title" class="admin-form-input"
                        value="{{ $content['profile']['title']->value ?? 'Membuka Akses Bisnis Modern di Sektor Properti & Mobilitas' }}"
                        placeholder="Judul halaman About">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 1</label>
                <textarea name="profile_paragraph_1" class="admin-form-textarea" rows="3"
                    placeholder="Paragraf pertama tentang BIOTRA">{{ $content['profile']['paragraph_1']->value ?? 'BIOTRA adalah program kemitraan modern yang bergerak di sektor properti, penginapan, apartemen, rental kendaraan, dan pariwisata. BIOTRA hadir untuk membantu masyarakat memiliki akses bisnis yang lebih praktis tanpa harus mengelola operasional secara langsung.' }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 2</label>
                <textarea name="profile_paragraph_2" class="admin-form-textarea" rows="3"
                    placeholder="Paragraf kedua tentang BIOTRA">{{ $content['profile']['paragraph_2']->value ?? 'Melalui sistem yang terarah, BIOTRA menghubungkan peluang di sektor akomodasi dan mobilitas dengan kebutuhan pasar yang terus berjalan, mulai dari penginapan, staycation, perjalanan bisnis, wisata, hingga kebutuhan transportasi.' }}</textarea>
            </div>

            {{-- Divider --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Sektor BIOTRA</div>

            <div class="admin-form-group">
                <label class="admin-form-label">Label Sektor</label>
                <input type="text" name="profile_sector_label" class="admin-form-input"
                    value="{{ $content['profile']['sector_label']->value ?? 'Sektor BIOTRA' }}"
                    placeholder="Sektor BIOTRA">
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin-bottom:20px;">
                @foreach([
                    ['1', 'Properti'],
                    ['2', 'Penginapan'],
                    ['3', 'Apartemen'],
                    ['4', 'Rental Kendaraan'],
                    ['5', 'Pariwisata'],
                    ['6', 'Mobilitas'],
                ] as [$num, $default])
                <div class="admin-form-group" style="margin-bottom:0;">
                    <label class="admin-form-label">Sektor {{ $num }}</label>
                    <input type="text" name="profile_sector_{{ $num }}" class="admin-form-input"
                        value="{{ $content['profile']['sector_' . $num]->value ?? $default }}"
                        placeholder="{{ $default }}">
                </div>
                @endforeach
            </div>

            {{-- Divider --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Stat Cards</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Stat 1 — Judul</label>
                    <input type="text" name="profile_stat_1_title" class="admin-form-input"
                        value="{{ $content['profile']['stat_1_title']->value ?? 'Properti' }}"
                        placeholder="Properti">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Stat 1 — Deskripsi</label>
                    <input type="text" name="profile_stat_1_description" class="admin-form-input"
                        value="{{ $content['profile']['stat_1_description']->value ?? 'Villa, penginapan, dan apartemen' }}"
                        placeholder="Villa, penginapan, dan apartemen">
                </div>
            </div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Stat 2 — Judul</label>
                    <input type="text" name="profile_stat_2_title" class="admin-form-input"
                        value="{{ $content['profile']['stat_2_title']->value ?? 'Mobilitas' }}"
                        placeholder="Mobilitas">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Stat 2 — Deskripsi</label>
                    <input type="text" name="profile_stat_2_description" class="admin-form-input"
                        value="{{ $content['profile']['stat_2_description']->value ?? 'Rental kendaraan wisata dan bisnis' }}"
                        placeholder="Rental kendaraan wisata dan bisnis">
                </div>
            </div>

            {{-- Divider --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Slider Gambar (3 Foto)</div>

            <div class="admin-form-notice" style="margin-bottom:24px;">
                <i class="bi bi-info-circle"></i>
                Biarkan kosong jika tidak ingin mengganti gambar. Format: JPG, PNG, WebP. Maks 4MB per gambar.
            </div>

            <div class="admin-form-image-row">
                @foreach([
                    ['1', 'assets/img/about-page/about-profile-1.jpg'],
                    ['2', 'assets/img/about-page/about-profile-2.jpg'],
                    ['3', 'assets/img/about-page/about-profile-3.jpg'],
                ] as [$num, $default])
                <div class="admin-form-image-upload">
                    <div class="admin-form-image-preview">
                        @if(!empty($content['profile']['slide_' . $num]->image_path ?? null))
                            <img src="{{ asset('storage/' . $content['profile']['slide_' . $num]->image_path) }}" alt="Slide {{ $num }}">
                        @else
                            <img src="{{ asset($default) }}" alt="Slide {{ $num }} Default">
                        @endif
                    </div>
                    <label class="admin-form-label">Slide {{ $num }}</label>
                    <input type="file" name="profile_slide_{{ $num }}" class="admin-form-file" accept="image/*">
                </div>
                @endforeach
            </div>

        </div>
    </div>

    {{-- =====================================================
         CARD 2: Konsep Bisnis
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Konsep Bisnis</h2>
                <p>Header section dan 3 kartu konsep kemitraan</p>
            </div>
        </div>

        <div class="admin-form-body">

            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Header Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="business_label" class="admin-form-input"
                        value="{{ $content['business_concept']['label']->value ?? 'Konsep Bisnis' }}"
                        placeholder="Konsep Bisnis">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="business_title" class="admin-form-input"
                        value="{{ $content['business_concept']['title']->value ?? 'Sistem Kemitraan dengan Konsep Hak Pakai dan Hak Sewa' }}"
                        placeholder="Judul Konsep Bisnis">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 1</label>
                <textarea name="business_paragraph_1" class="admin-form-textarea" rows="3"
                    placeholder="Paragraf pertama konsep bisnis">{{ $content['business_concept']['paragraph_1']->value ?? 'BIOTRA dirancang dengan konsep kemitraan yang memberikan akses kepada mitra untuk menggunakan unit sekaligus memiliki peluang dari penyewaan unit sesuai ketentuan program yang berlaku.' }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 2</label>
                <textarea name="business_paragraph_2" class="admin-form-textarea" rows="3"
                    placeholder="Paragraf kedua konsep bisnis">{{ $content['business_concept']['paragraph_2']->value ?? 'Dengan sistem ini, mitra tidak harus membeli properti atau kendaraan secara penuh, serta tidak perlu mengelola seluruh proses operasional secara mandiri.' }}</textarea>
            </div>

            {{-- Divider --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Kartu Konsep</div>

            @foreach([
                ['1', 'Hak Pakai', 'Mitra mendapatkan akses penggunaan unit sesuai program dan ketentuan yang berlaku. Konsep ini memberikan fleksibilitas bagi mitra untuk menikmati manfaat penggunaan unit secara langsung.'],
                ['2', 'Hak Sewa', 'Mitra memiliki peluang mendapatkan benefit dari penyewaan unit melalui skema kemitraan BIOTRA. Hasil mengikuti ketentuan program, performa sewa, dan kondisi pasar.'],
                ['3', 'Operasional Dikelola BIOTRA', 'BIOTRA membantu mengelola kebutuhan operasional seperti booking, maintenance, customer service, driver, promosi, dan perawatan unit agar mitra tidak perlu menangani semuanya sendiri.'],
            ] as [$num, $defaultTitle, $defaultDesc])
            <div style="margin-bottom:24px;padding:20px;background:rgba(255,255,255,0.03);border-radius:12px;border:1px solid rgba(255,255,255,0.06);">
                <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:16px;">Kartu {{ $num }}</div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label class="admin-form-label">Judul Kartu {{ $num }}</label>
                        <input type="text" name="business_card_{{ $num }}_title" class="admin-form-input"
                            value="{{ $content['business_concept']['card_' . $num . '_title']->value ?? $defaultTitle }}"
                            placeholder="{{ $defaultTitle }}">
                    </div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Deskripsi Kartu {{ $num }}</label>
                        <textarea name="business_card_{{ $num }}_description" class="admin-form-textarea" rows="3"
                            placeholder="{{ $defaultDesc }}">{{ $content['business_concept']['card_' . $num . '_description']->value ?? $defaultDesc }}</textarea>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    {{-- =====================================================
         CARD 3: Area Operasional
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Area Operasional</h2>
                <p>Header section dan 4 panel area beserta foto</p>
            </div>
        </div>

        <div class="admin-form-body">

            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Header Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="area_label" class="admin-form-input"
                        value="{{ $content['operational_area']['label']->value ?? 'Area Bisnis' }}"
                        placeholder="Area Bisnis">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="area_title" class="admin-form-input"
                        value="{{ $content['operational_area']['title']->value ?? 'Area Operasional dan Produk Utama BIOTRA' }}"
                        placeholder="Judul Area Operasional">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Section</label>
                <textarea name="area_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi singkat area operasional">{{ $content['operational_area']['description']->value ?? 'BIOTRA mengembangkan peluang kemitraan di beberapa area bisnis yang berkaitan dengan kebutuhan akomodasi, pariwisata, perjalanan bisnis, dan mobilitas.' }}</textarea>
            </div>

            <div class="admin-form-notice" style="margin-top:16px;margin-bottom:24px;">
                <i class="bi bi-info-circle"></i>
                Foto area digunakan sebagai gambar utama panel. Gambar peta hover dikelola terpisah di folder <code>public/assets/img/about-page/maps/</code>.
            </div>

            {{-- Divider --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>

            @foreach([
                ['1', 'Villa & Staycation', 'Bali', 'Peluang bisnis penginapan wisata untuk kebutuhan liburan, staycation, dan akomodasi pariwisata.', 'assets/img/about-page/area-bali.jpg'],
                ['2', 'Hotel & Penginapan', 'Jakarta / PIK 2', 'Akomodasi untuk kebutuhan perjalanan bisnis, wisata, dan menginap jangka pendek di area strategis.', 'assets/img/about-page/area-jakarta.jpg'],
                ['3', 'Apartemen Harian & Mingguan', 'Bekasi & Cikarang', 'Pilihan hunian sementara untuk pekerja, perjalanan bisnis, maupun kebutuhan tinggal fleksibel.', 'assets/img/about-page/area-bekasi.jpg'],
                ['4', 'Rental Kendaraan Wisata & Bisnis', 'Mobility', 'Layanan mobilitas untuk kebutuhan perjalanan wisata, bisnis, dan transportasi harian.', 'assets/img/about-page/area-mobility.jpg'],
            ] as [$num, $defaultTitle, $defaultLocation, $defaultDesc, $defaultImg])
            <div style="margin-bottom:28px;padding:20px;background:rgba(255,255,255,0.03);border-radius:12px;border:1px solid rgba(255,255,255,0.06);">
                <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:16px;">Area {{ $num }}</div>

                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label class="admin-form-label">Judul Area</label>
                        <input type="text" name="area_{{ $num }}_title" class="admin-form-input"
                            value="{{ $content['operational_area']['area_' . $num . '_title']->value ?? $defaultTitle }}"
                            placeholder="{{ $defaultTitle }}">
                    </div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Lokasi</label>
                        <input type="text" name="area_{{ $num }}_location" class="admin-form-input"
                            value="{{ $content['operational_area']['area_' . $num . '_location']->value ?? $defaultLocation }}"
                            placeholder="{{ $defaultLocation }}">
                    </div>
                </div>

                <div class="admin-form-group">
                    <label class="admin-form-label">Deskripsi</label>
                    <textarea name="area_{{ $num }}_description" class="admin-form-textarea" rows="2"
                        placeholder="{{ $defaultDesc }}">{{ $content['operational_area']['area_' . $num . '_description']->value ?? $defaultDesc }}</textarea>
                </div>

                <div style="display:flex;align-items:flex-start;gap:20px;margin-top:4px;">
                    <div class="admin-form-image-preview" style="flex-shrink:0;">
                        @if(!empty($content['operational_area']['area_' . $num . '_image']->image_path ?? null))
                            <img src="{{ asset('storage/' . $content['operational_area']['area_' . $num . '_image']->image_path) }}" alt="Area {{ $num }}">
                        @else
                            <img src="{{ asset($defaultImg) }}" alt="Area {{ $num }} Default">
                        @endif
                    </div>
                    <div class="admin-form-group" style="flex:1;margin-bottom:0;">
                        <label class="admin-form-label">Foto Area (Panel)</label>
                        <input type="file" name="area_{{ $num }}_image" class="admin-form-file" accept="image/*">
                        <div class="admin-form-hint">JPG, PNG, WebP — Maks 4MB</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    {{-- =====================================================
         CARD 4: Alasan BIOTRA Hadir
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Alasan BIOTRA Hadir</h2>
                <p>Header section, kartu masalah, kartu solusi, dan CTA box</p>
            </div>
        </div>

        <div class="admin-form-body">

            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Header Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="reason_label" class="admin-form-input"
                        value="{{ $content['reason']['label']->value ?? 'Kenapa BIOTRA Hadir' }}"
                        placeholder="Kenapa BIOTRA Hadir">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="reason_title" class="admin-form-input"
                        value="{{ $content['reason']['title']->value ?? 'Solusi untuk Memulai Bisnis Tanpa Harus Mengelola Semuanya Sendiri' }}"
                        placeholder="Judul section Alasan">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Section</label>
                <textarea name="reason_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi singkat">{{ $content['reason']['description']->value ?? 'Banyak orang ingin memiliki bisnis dan penghasilan tambahan, tetapi sering terkendala modal besar, operasional yang rumit, keterbatasan waktu, dan kurangnya pengalaman dalam mengelola bisnis properti maupun kendaraan.' }}</textarea>
            </div>

            {{-- Masalah --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Kartu Masalah (Tantangan)</div>

            <div class="admin-form-group">
                <label class="admin-form-label">Judul Kartu Masalah</label>
                <input type="text" name="reason_problem_title" class="admin-form-input"
                    value="{{ $content['reason']['problem_title']->value ?? 'Masalah yang Sering Terjadi' }}"
                    placeholder="Masalah yang Sering Terjadi">
            </div>

            @foreach([
                ['1', 'Ingin punya bisnis, tetapi modal awal terlalu besar'],
                ['2', 'Operasional properti dan kendaraan membutuhkan waktu'],
                ['3', 'Maintenance, booking, dan promosi perlu dikelola secara konsisten'],
                ['4', 'Tidak semua orang memiliki pengalaman di sektor properti dan mobilitas'],
            ] as [$num, $default])
            <div class="admin-form-group">
                <label class="admin-form-label">Poin Masalah {{ $num }}</label>
                <input type="text" name="reason_problem_point_{{ $num }}" class="admin-form-input"
                    value="{{ $content['reason']['problem_point_' . $num]->value ?? $default }}"
                    placeholder="{{ $default }}">
            </div>
            @endforeach

            {{-- Solusi --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Kartu Solusi</div>

            <div class="admin-form-group">
                <label class="admin-form-label">Judul Kartu Solusi</label>
                <input type="text" name="reason_solution_title" class="admin-form-input"
                    value="{{ $content['reason']['solution_title']->value ?? 'Solusi dari BIOTRA' }}"
                    placeholder="Solusi dari BIOTRA">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Kartu Solusi</label>
                <textarea name="reason_solution_description" class="admin-form-textarea" rows="3"
                    placeholder="Deskripsi solusi">{{ $content['reason']['solution_description']->value ?? 'BIOTRA hadir sebagai solusi kemitraan yang lebih praktis dengan menyediakan akses ke sektor properti, akomodasi, dan rental kendaraan. Operasional dibantu oleh BIOTRA, sehingga mitra dapat menjalankan program dengan sistem yang lebih terarah.' }}</textarea>
            </div>

            @foreach([
                ['1', 'Akses bisnis properti dan mobilitas'],
                ['2', 'Operasional dibantu oleh BIOTRA'],
                ['3', 'Unit dapat digunakan atau disewakan'],
                ['4', 'Sistem kemitraan lebih praktis dan terarah'],
            ] as [$num, $default])
            <div class="admin-form-group">
                <label class="admin-form-label">Poin Solusi {{ $num }}</label>
                <input type="text" name="reason_solution_point_{{ $num }}" class="admin-form-input"
                    value="{{ $content['reason']['solution_point_' . $num]->value ?? $default }}"
                    placeholder="{{ $default }}">
            </div>
            @endforeach

            {{-- CTA --}}
            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">CTA Box (Konsultasi)</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label CTA</label>
                    <input type="text" name="reason_cta_label" class="admin-form-input"
                        value="{{ $content['reason']['cta_label']->value ?? 'Konsultasi Program' }}"
                        placeholder="Konsultasi Program">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul CTA</label>
                    <input type="text" name="reason_cta_title" class="admin-form-input"
                        value="{{ $content['reason']['cta_title']->value ?? 'Ingin Mengenal Program BIOTRA Lebih Dekat?' }}"
                        placeholder="Judul CTA box">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi CTA</label>
                <textarea name="reason_cta_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi CTA">{{ $content['reason']['cta_description']->value ?? 'Pelajari bagaimana sistem kemitraan BIOTRA dapat membantu Anda memiliki akses bisnis di sektor properti dan mobilitas dengan cara yang lebih praktis.' }}</textarea>
            </div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Teks Tombol CTA</label>
                    <input type="text" name="reason_cta_button_text" class="admin-form-input"
                        value="{{ $content['reason']['cta_button_text']->value ?? 'Konsultasi Sekarang' }}"
                        placeholder="Konsultasi Sekarang">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Link Tombol CTA</label>
                    <input type="url" name="reason_cta_button_link" class="admin-form-input"
                        value="{{ $content['reason']['cta_button_link']->value ?? '' }}"
                        placeholder="{{ route('contact') }}">
                    <div class="admin-form-hint">Kosongkan untuk menggunakan halaman Kontak secara default.</div>
                </div>
            </div>

        </div>
    </div>

    {{-- Submit --}}
    <div style="display:flex;justify-content:flex-end;gap:16px;margin-bottom:48px;">
        <a href="{{ route('about') }}" target="_blank" class="admin-button-outline">
            <i class="bi bi-eye"></i> Pratinjau Halaman
        </a>
        <button type="submit" class="admin-button">
            <i class="bi bi-floppy"></i> Simpan Semua Perubahan
        </button>
    </div>

</form>

@endsection
