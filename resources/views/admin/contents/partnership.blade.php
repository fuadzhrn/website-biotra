@extends('layouts.admin')

@section('title', 'Kelola Kemitraan — Admin BIOTRA')
@section('page_title', 'Kelola Kemitraan')
@section('page_subtitle', 'Atur informasi program kemitraan BIOTRA')

@section('content')

@if(session('success'))
    <div class="admin-alert-success admin-mb-24">
        <i class="bi bi-check-circle-fill"></i>
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.contents.partnership.update') }}" method="POST">
    @csrf

    {{-- =====================================================
         CARD 1: Page Header
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Header Halaman Kemitraan</h2>
                <p>Label, judul, deskripsi, dan catatan di bagian atas halaman</p>
            </div>
            <a href="{{ route('partnership') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i> Pratinjau
            </a>
        </div>

        <div class="admin-form-body">
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="page_header_label" class="admin-form-input"
                        value="{{ $content['page_header']['label']->value ?? 'Kemitraan BIOTRA' }}"
                        placeholder="Kemitraan BIOTRA">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Utama (H1)</label>
                    <input type="text" name="page_header_title" class="admin-form-input"
                        value="{{ $content['page_header']['title']->value ?? 'Mulai Akses Bisnis Properti dan Mobilitas dengan Sistem yang Lebih Praktis' }}"
                        placeholder="Judul halaman Kemitraan">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi</label>
                <textarea name="page_header_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi singkat halaman Kemitraan">{{ $content['page_header']['description']->value ?? 'Program Kemitraan BIOTRA dirancang untuk membantu mitra memiliki akses bisnis di sektor properti, akomodasi, pariwisata, dan rental kendaraan tanpa harus mengelola seluruh operasional secara mandiri.' }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Catatan Header</label>
                <input type="text" name="page_header_note" class="admin-form-input"
                    value="{{ $content['page_header']['note']->value ?? 'Informasi program, benefit, biaya, dan simulasi mengikuti syarat serta ketentuan yang berlaku.' }}"
                    placeholder="Catatan kecil di bawah deskripsi">
            </div>
        </div>
    </div>

    {{-- =====================================================
         CARD 2: Peluang Industri
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Peluang Industri</h2>
                <p>Teks, poin industri, dan keterangan grafik</p>
            </div>
        </div>

        <div class="admin-form-body">
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Teks Utama</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="industry_label" class="admin-form-input"
                        value="{{ $content['industry']['label']->value ?? 'Peluang Industri' }}"
                        placeholder="Peluang Industri">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="industry_title" class="admin-form-input"
                        value="{{ $content['industry']['title']->value ?? 'Peluang Bisnis di Sektor Pariwisata, Akomodasi, dan Mobilitas' }}"
                        placeholder="Judul peluang industri">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 1</label>
                <textarea name="industry_paragraph_1" class="admin-form-textarea" rows="3"
                    placeholder="Paragraf pertama peluang industri">{{ $content['industry']['paragraph_1']->value ?? 'Kebutuhan pasar terhadap penginapan, staycation, perjalanan bisnis, wisata, dan transportasi terus berjalan. BIOTRA hadir untuk membuka akses kemitraan di sektor properti dan mobilitas dengan sistem yang lebih praktis, terarah, dan dikelola secara profesional.' }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 2</label>
                <textarea name="industry_paragraph_2" class="admin-form-textarea" rows="2"
                    placeholder="Paragraf kedua peluang industri">{{ $content['industry']['paragraph_2']->value ?? 'Melalui program ini, mitra dapat memahami bagaimana peluang akomodasi dan mobilitas dapat dihubungkan dalam satu ekosistem bisnis yang saling mendukung.' }}</textarea>
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Poin Industri</div>

            @foreach([
                ['1', 'Kebutuhan penginapan dan staycation terus berjalan'],
                ['2', 'Perjalanan bisnis membutuhkan akomodasi yang praktis'],
                ['3', 'Sektor wisata membutuhkan dukungan transportasi'],
                ['4', 'Rental kendaraan menjadi bagian penting dari mobilitas'],
            ] as [$n, $default])
            <div class="admin-form-group">
                <label class="admin-form-label">Poin {{ $n }}</label>
                <input type="text" name="industry_point_{{ $n }}" class="admin-form-input"
                    value="{{ $content['industry']['point_' . $n]->value ?? $default }}"
                    placeholder="{{ $default }}">
            </div>
            @endforeach

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Keterangan Grafik</div>

            <div class="admin-form-notice" style="margin-bottom:20px;">
                <i class="bi bi-info-circle"></i>
                Data grafik Chart.js tetap statis. Hanya label, judul, dan deskripsi yang bisa diedit.
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px;">
                <div style="padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                    <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:12px;">Grafik 1 — Akomodasi</div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Label (Badge)</label>
                        <input type="text" name="industry_chart_1_label" class="admin-form-input"
                            value="{{ $content['industry']['chart_1_label']->value ?? 'Grafik 01' }}"
                            placeholder="Grafik 01">
                    </div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Judul</label>
                        <input type="text" name="industry_chart_1_title" class="admin-form-input"
                            value="{{ $content['industry']['chart_1_title']->value ?? 'Tren Okupansi Hotel & Villa' }}"
                            placeholder="Tren Okupansi Hotel & Villa">
                    </div>
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Deskripsi</label>
                        <textarea name="industry_chart_1_description" class="admin-form-textarea" rows="2"
                            placeholder="Deskripsi grafik 1">{{ $content['industry']['chart_1_description']->value ?? 'Visualisasi tren akomodasi untuk menggambarkan kebutuhan pasar terhadap hotel, villa, dan penginapan.' }}</textarea>
                    </div>
                </div>

                <div style="padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                    <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:12px;">Grafik 2 — Mobilitas</div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Label (Badge)</label>
                        <input type="text" name="industry_chart_2_label" class="admin-form-input"
                            value="{{ $content['industry']['chart_2_label']->value ?? 'Grafik 02' }}"
                            placeholder="Grafik 02">
                    </div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Judul</label>
                        <input type="text" name="industry_chart_2_title" class="admin-form-input"
                            value="{{ $content['industry']['chart_2_title']->value ?? 'Pertumbuhan Rental Mobil' }}"
                            placeholder="Pertumbuhan Rental Mobil">
                    </div>
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Deskripsi</label>
                        <textarea name="industry_chart_2_description" class="admin-form-textarea" rows="2"
                            placeholder="Deskripsi grafik 2">{{ $content['industry']['chart_2_description']->value ?? 'Visualisasi tren mobilitas untuk menggambarkan kebutuhan pasar terhadap rental kendaraan wisata dan bisnis.' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Catatan Grafik</label>
                <input type="text" name="industry_chart_note" class="admin-form-input"
                    value="{{ $content['industry']['chart_note']->value ?? 'Grafik ditampilkan sebagai ilustrasi tren sektor akomodasi dan mobilitas, bukan sebagai jaminan hasil atau pendapatan.' }}"
                    placeholder="Catatan di bawah grafik">
            </div>
        </div>
    </div>

    {{-- =====================================================
         CARD 3: Cara Kerja Kemitraan
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Cara Kerja Kemitraan</h2>
                <p>Header section dan 5 langkah alur kemitraan</p>
            </div>
        </div>

        <div class="admin-form-body">
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Header Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="workflow_label" class="admin-form-input"
                        value="{{ $content['workflow']['label']->value ?? 'Cara Kerja Kemitraan' }}"
                        placeholder="Cara Kerja Kemitraan">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="workflow_title" class="admin-form-input"
                        value="{{ $content['workflow']['title']->value ?? 'Alur Bergabung dalam Program Kemitraan BIOTRA' }}"
                        placeholder="Judul cara kerja kemitraan">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Section</label>
                <textarea name="workflow_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi singkat cara kerja kemitraan">{{ $content['workflow']['description']->value ?? 'Program Kemitraan BIOTRA dibuat agar calon mitra dapat memahami proses bergabung dengan lebih mudah, mulai dari memilih program hingga mendapatkan benefit sesuai ketentuan yang berlaku.' }}</textarea>
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Langkah-Langkah</div>

            @foreach([
                ['1', 'Pilih Program Kemitraan', 'Calon mitra memilih program kemitraan BIOTRA sesuai kebutuhan, ketentuan, dan ketersediaan program.'],
                ['2', 'Mitra Bergabung', 'Mitra mengikuti proses bergabung berdasarkan skema program, biaya, dan ketentuan yang berlaku.'],
                ['3', 'BIOTRA Mengelola Operasional', 'BIOTRA membantu mengelola reservasi, promosi, customer service, maintenance, driver, dan perawatan unit.'],
                ['4', 'Unit Digunakan atau Disewakan', 'Unit dapat dimanfaatkan sesuai program, baik untuk penggunaan pribadi maupun potensi penyewaan.'],
                ['5', 'Mitra Mendapatkan Benefit', 'Benefit mitra mengikuti skema kemitraan, performa sewa, kondisi pasar, serta syarat dan ketentuan program.'],
            ] as [$n, $defaultTitle, $defaultDesc])
            <div style="margin-bottom:16px;padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:12px;">Langkah {{ $n }}</div>
                <div class="admin-form-row">
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Judul</label>
                        <input type="text" name="workflow_step_{{ $n }}_title" class="admin-form-input"
                            value="{{ $content['workflow']['step_' . $n . '_title']->value ?? $defaultTitle }}"
                            placeholder="{{ $defaultTitle }}">
                    </div>
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Deskripsi</label>
                        <textarea name="workflow_step_{{ $n }}_description" class="admin-form-textarea" rows="2"
                            placeholder="{{ $defaultDesc }}">{{ $content['workflow']['step_' . $n . '_description']->value ?? $defaultDesc }}</textarea>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- =====================================================
         CARD 4: Benefit Mitra
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Benefit Mitra</h2>
                <p>Header section dan 8 kartu benefit</p>
            </div>
        </div>

        <div class="admin-form-body">
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Header Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="benefits_label" class="admin-form-input"
                        value="{{ $content['benefits']['label']->value ?? 'Benefit Mitra' }}"
                        placeholder="Benefit Mitra">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="benefits_title" class="admin-form-input"
                        value="{{ $content['benefits']['title']->value ?? 'Keuntungan Bergabung dalam Program Kemitraan BIOTRA' }}"
                        placeholder="Judul benefit mitra">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Section</label>
                <textarea name="benefits_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi singkat benefit mitra">{{ $content['benefits']['description']->value ?? 'Program Kemitraan BIOTRA dirancang agar mitra dapat memiliki akses bisnis dengan sistem yang lebih praktis, tanpa harus menangani seluruh operasional secara langsung.' }}</textarea>
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Kartu Benefit (8 Kartu)</div>

            @foreach([
                ['1', 'Hak Pakai Unit', 'Mitra mendapatkan akses penggunaan unit sesuai ketentuan program yang berlaku.'],
                ['2', 'Hak Sewa Unit', 'Mitra memiliki peluang mendapatkan benefit dari penyewaan unit sesuai skema kemitraan BIOTRA.'],
                ['3', 'Bagi Hasil Sesuai Ketentuan', 'Skema bagi hasil mengikuti ketentuan program dan performa penyewaan unit.'],
                ['4', 'Operasional Dikelola BIOTRA', 'BIOTRA membantu mengelola booking, maintenance, customer service, driver, promosi, dan perawatan unit.'],
                ['5', 'Tanpa Repot Maintenance', 'Mitra tidak perlu menangani perawatan unit secara langsung karena sistem operasional dibantu oleh BIOTRA.'],
                ['6', 'Sistem Reservasi Profesional', 'Proses reservasi dan kebutuhan pelanggan dikelola dengan sistem yang lebih rapi dan terarah.'],
                ['7', 'Legalitas by Notaris', 'Program kemitraan didukung dengan legalitas sesuai ketentuan yang berlaku.'],
                ['8', 'Fleksibel Digunakan atau Disewakan', 'Unit dapat dimanfaatkan sesuai kebutuhan program, baik untuk digunakan maupun disewakan.'],
            ] as [$n, $defaultTitle, $defaultDesc])
            <div style="margin-bottom:16px;padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:12px;">Benefit {{ $n }}</div>
                <div class="admin-form-row">
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Judul</label>
                        <input type="text" name="benefits_{{ $n }}_title" class="admin-form-input"
                            value="{{ $content['benefits']['benefit_' . $n . '_title']->value ?? $defaultTitle }}"
                            placeholder="{{ $defaultTitle }}">
                    </div>
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Deskripsi</label>
                        <textarea name="benefits_{{ $n }}_description" class="admin-form-textarea" rows="2"
                            placeholder="{{ $defaultDesc }}">{{ $content['benefits']['benefit_' . $n . '_description']->value ?? $defaultDesc }}</textarea>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- =====================================================
         CARD 5: Pricing Promo
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Pricing Promo Kemitraan</h2>
                <p>Harga normal, diskon, special, benefit panel, dan link tombol</p>
            </div>
        </div>

        <div class="admin-form-body">
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Header Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="pricing_label" class="admin-form-input"
                        value="{{ $content['pricing']['label']->value ?? 'Biaya Bergabung' }}"
                        placeholder="Biaya Bergabung">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="pricing_title" class="admin-form-input"
                        value="{{ $content['pricing']['title']->value ?? 'Gabung Program Kemitraan BIOTRA dengan Penawaran Spesial' }}"
                        placeholder="Judul pricing section">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Section</label>
                <textarea name="pricing_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi singkat pricing">{{ $content['pricing']['description']->value ?? 'BIOTRA menghadirkan penawaran kemitraan dengan skema biaya yang lebih ringan untuk calon mitra yang ingin bergabung dalam ekosistem properti, akomodasi, dan mobilitas. Informasi harga mengikuti kuota, periode, dan ketentuan program yang berlaku.' }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Teks Badge Promo</label>
                <input type="text" name="pricing_promo_badge" class="admin-form-input"
                    value="{{ $content['pricing']['promo_badge']->value ?? 'Promo Kemitraan BIOTRA' }}"
                    placeholder="Promo Kemitraan BIOTRA">
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Panel Harga (Kiri)</div>

            <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin-bottom:20px;">
                <div style="padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                    <div style="font-size:12px;font-weight:600;color:var(--text-muted);margin-bottom:12px;">Harga Normal</div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Label</label>
                        <input type="text" name="pricing_normal_price_label" class="admin-form-input"
                            value="{{ $content['pricing']['normal_price_label']->value ?? 'Harga Normal' }}"
                            placeholder="Harga Normal">
                    </div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Harga (dicoret)</label>
                        <input type="text" name="pricing_normal_price" class="admin-form-input"
                            value="{{ $content['pricing']['normal_price']->value ?? 'Rp96.000.000' }}"
                            placeholder="Rp96.000.000">
                    </div>
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Catatan</label>
                        <input type="text" name="pricing_normal_price_note" class="admin-form-input"
                            value="{{ $content['pricing']['normal_price_note']->value ?? 'Harga normal program reguler' }}"
                            placeholder="Harga normal program reguler">
                    </div>
                </div>

                <div style="padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                    <div style="font-size:12px;font-weight:600;color:var(--text-muted);margin-bottom:12px;">Harga Diskon</div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Label</label>
                        <input type="text" name="pricing_discount_price_label" class="admin-form-input"
                            value="{{ $content['pricing']['discount_price_label']->value ?? 'Harga Diskon' }}"
                            placeholder="Harga Diskon">
                    </div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Harga Diskon</label>
                        <input type="text" name="pricing_discount_price" class="admin-form-input"
                            value="{{ $content['pricing']['discount_price']->value ?? 'Rp36.000.000' }}"
                            placeholder="Rp36.000.000">
                    </div>
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Catatan</label>
                        <textarea name="pricing_discount_price_note" class="admin-form-textarea" rows="2"
                            placeholder="Catatan harga diskon">{{ $content['pricing']['discount_price_note']->value ?? 'Penawaran khusus untuk calon mitra yang ingin bergabung lebih awal.' }}</textarea>
                    </div>
                </div>

                <div style="padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(214,164,58,0.2);">
                    <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:12px;">Harga Special</div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Label</label>
                        <input type="text" name="pricing_special_label" class="admin-form-input"
                            value="{{ $content['pricing']['special_label']->value ?? 'Diskon Special' }}"
                            placeholder="Diskon Special">
                    </div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Harga Special (Gold)</label>
                        <input type="text" name="pricing_special_price" class="admin-form-input"
                            value="{{ $content['pricing']['special_price']->value ?? 'Rp27.500.000' }}"
                            placeholder="Rp27.500.000">
                    </div>
                    <div class="admin-form-group" style="margin-bottom:0;">
                        <label class="admin-form-label">Deskripsi</label>
                        <textarea name="pricing_special_description" class="admin-form-textarea" rows="2"
                            placeholder="Deskripsi harga special">{{ $content['pricing']['special_description']->value ?? 'Isi form konsultasi untuk mendapatkan informasi harga spesial Rp27.500.000 sesuai kuota dan ketentuan program BIOTRA.' }}</textarea>
                    </div>
                </div>
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Panel Benefit & Tombol (Kanan)</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Benefit</label>
                    <input type="text" name="pricing_benefit_title" class="admin-form-input"
                        value="{{ $content['pricing']['benefit_title']->value ?? 'Benefit Program' }}"
                        placeholder="Benefit Program">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Deskripsi Benefit</label>
                    <textarea name="pricing_benefit_description" class="admin-form-textarea" rows="2"
                        placeholder="Deskripsi benefit">{{ $content['pricing']['benefit_description']->value ?? 'Program kemitraan BIOTRA dirancang agar calon mitra dapat memahami skema program dengan lebih praktis dan terarah.' }}</textarea>
                </div>
            </div>

            @foreach([
                ['1', 'Hak pakai dan hak sewa sesuai ketentuan program'],
                ['2', 'Operasional dibantu oleh BIOTRA'],
                ['3', 'Benefit mengikuti skema kemitraan'],
                ['4', 'Legalitas dan ketentuan program dapat dikonsultasikan'],
            ] as [$n, $default])
            <div class="admin-form-group">
                <label class="admin-form-label">Poin Benefit {{ $n }}</label>
                <input type="text" name="pricing_benefit_{{ $n }}" class="admin-form-input"
                    value="{{ $content['pricing']['benefit_' . $n]->value ?? $default }}"
                    placeholder="{{ $default }}">
            </div>
            @endforeach

            <div class="admin-form-row" style="margin-top:8px;">
                <div class="admin-form-group">
                    <label class="admin-form-label">Teks Tombol Utama</label>
                    <input type="text" name="pricing_main_button_text" class="admin-form-input"
                        value="{{ $content['pricing']['main_button_text']->value ?? 'Gabung Sekarang' }}"
                        placeholder="Gabung Sekarang">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Link Tombol Utama</label>
                    <input type="url" name="pricing_main_button_link" class="admin-form-input"
                        value="{{ $content['pricing']['main_button_link']->value ?? '' }}"
                        placeholder="{{ route('contact') }}#consultation-form">
                    <div class="admin-form-hint">Kosongkan untuk fallback ke halaman Kontak#consultation-form.</div>
                </div>
            </div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Teks Link Sekunder</label>
                    <input type="text" name="pricing_secondary_button_text" class="admin-form-input"
                        value="{{ $content['pricing']['secondary_button_text']->value ?? 'Konsultasi Program' }}"
                        placeholder="Konsultasi Program">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Link Sekunder</label>
                    <input type="url" name="pricing_secondary_button_link" class="admin-form-input"
                        value="{{ $content['pricing']['secondary_button_link']->value ?? '' }}"
                        placeholder="{{ route('contact') }}#consultation-form">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Catatan Harga (Disclaimer Pricing)</label>
                <textarea name="pricing_note" class="admin-form-textarea" rows="2"
                    placeholder="Catatan disclaimer harga">{{ $content['pricing']['note']->value ?? 'Harga, promo, diskon, kuota, benefit, dan skema pembayaran dapat berubah sewaktu-waktu mengikuti kebijakan BIOTRA. Informasi final dapat dikonfirmasi melalui tim BIOTRA.' }}</textarea>
            </div>
        </div>
    </div>

    {{-- =====================================================
         CARD 6: Simulasi Potensi Hasil
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Simulasi Potensi Hasil</h2>
                <p>Header, dua kartu simulasi, highlight gabungan, dan disclaimer</p>
            </div>
        </div>

        <div class="admin-form-body">
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Header Section</div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="simulation_label" class="admin-form-input"
                        value="{{ $content['simulation']['label']->value ?? 'Simulasi Financial' }}"
                        placeholder="Simulasi Financial">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Section</label>
                    <input type="text" name="simulation_title" class="admin-form-input"
                        value="{{ $content['simulation']['title']->value ?? 'Gambaran Potensi Hasil dari Program Kemitraan BIOTRA' }}"
                        placeholder="Judul simulasi">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Section</label>
                <textarea name="simulation_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi simulasi">{{ $content['simulation']['description']->value ?? 'Simulasi berikut digunakan untuk memberikan gambaran mengenai potensi hasil dari penyewaan unit properti dan rental kendaraan dalam program BIOTRA. Angka yang ditampilkan bersifat ilustrasi dan dapat berbeda sesuai okupansi, permintaan pasar, performa unit, serta ketentuan program.' }}</textarea>
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:28px;">
                {{-- Simulasi 01 --}}
                <div style="padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                    <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:12px;">Simulasi 01</div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Judul Kartu</label>
                        <input type="text" name="simulation_property_title" class="admin-form-input"
                            value="{{ $content['simulation']['property_title']->value ?? 'Villa / Apartemen' }}"
                            placeholder="Villa / Apartemen">
                    </div>
                    @foreach([
                        ['simulation_property_rent_label',     'property_rent_label',     'Label baris 1',    'Harga sewa'],
                        ['simulation_property_rent_value',     'property_rent_value',     'Nilai baris 1',    'Rp1.000.000 / malam'],
                        ['simulation_property_duration_label', 'property_duration_label', 'Label baris 2',    'Estimasi tersewa'],
                        ['simulation_property_duration_value', 'property_duration_value', 'Nilai baris 2',    '10 malam / bulan'],
                        ['simulation_property_total_label',    'property_total_label',    'Label baris 3',    'Total transaksi'],
                        ['simulation_property_total_value',    'property_total_value',    'Nilai baris 3',    'Rp10.000.000'],
                        ['simulation_property_share_label',    'property_share_label',    'Label baris 4',    'Hak sewa mitra'],
                        ['simulation_property_share_value',    'property_share_value',    'Nilai baris 4',    '60%'],
                        ['simulation_property_result_label',   'property_result_label',   'Label hasil',      'Potensi hasil'],
                        ['simulation_property_result_value',   'property_result_value',   'Nilai hasil',      'Rp6.000.000'],
                    ] as [$inputName, $key, $label, $placeholder])
                    <div class="admin-form-group" style="margin-bottom:10px;">
                        <label class="admin-form-label">{{ $label }}</label>
                        <input type="text" name="{{ $inputName }}" class="admin-form-input"
                            value="{{ $content['simulation'][$key]->value ?? $placeholder }}"
                            placeholder="{{ $placeholder }}">
                    </div>
                    @endforeach
                </div>

                {{-- Simulasi 02 --}}
                <div style="padding:16px;background:rgba(255,255,255,0.03);border-radius:10px;border:1px solid rgba(255,255,255,0.06);">
                    <div style="font-size:12px;font-weight:600;color:var(--gold);margin-bottom:12px;">Simulasi 02</div>
                    <div class="admin-form-group">
                        <label class="admin-form-label">Judul Kartu</label>
                        <input type="text" name="simulation_rental_title" class="admin-form-input"
                            value="{{ $content['simulation']['rental_title']->value ?? 'Rental Kendaraan' }}"
                            placeholder="Rental Kendaraan">
                    </div>
                    @foreach([
                        ['simulation_rental_price_label',    'rental_price_label',    'Label baris 1',  'Harga rental'],
                        ['simulation_rental_price_value',    'rental_price_value',    'Nilai baris 1',  'Rp450.000 / hari'],
                        ['simulation_rental_duration_label', 'rental_duration_label', 'Label baris 2',  'Estimasi tersewa'],
                        ['simulation_rental_duration_value', 'rental_duration_value', 'Nilai baris 2',  '20 hari / bulan'],
                        ['simulation_rental_total_label',    'rental_total_label',    'Label baris 3',  'Total transaksi'],
                        ['simulation_rental_total_value',    'rental_total_value',    'Nilai baris 3',  'Rp9.000.000'],
                        ['simulation_rental_share_label',    'rental_share_label',    'Label baris 4',  'Hak sewa mitra'],
                        ['simulation_rental_share_value',    'rental_share_value',    'Nilai baris 4',  '60%'],
                        ['simulation_rental_result_label',   'rental_result_label',   'Label hasil',    'Potensi hasil'],
                        ['simulation_rental_result_value',   'rental_result_value',   'Nilai hasil',    'Rp5.400.000'],
                    ] as [$inputName, $key, $label, $placeholder])
                    <div class="admin-form-group" style="margin-bottom:10px;">
                        <label class="admin-form-label">{{ $label }}</label>
                        <input type="text" name="{{ $inputName }}" class="admin-form-input"
                            value="{{ $content['simulation'][$key]->value ?? $placeholder }}"
                            placeholder="{{ $placeholder }}">
                    </div>
                    @endforeach
                </div>
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Highlight Gabungan</div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Highlight</label>
                    <input type="text" name="simulation_highlight_label" class="admin-form-input"
                        value="{{ $content['simulation']['highlight_label']->value ?? 'Estimasi Potensi Gabungan' }}"
                        placeholder="Estimasi Potensi Gabungan">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Angka Bulanan (Pill kecil)</label>
                    <input type="text" name="simulation_highlight_monthly" class="admin-form-input"
                        value="{{ $content['simulation']['highlight_monthly']->value ?? 'Rp11.400.000' }}"
                        placeholder="Rp11.400.000">
                    <div class="admin-form-hint">Ditampilkan sebagai catatan kecil di atas angka utama.</div>
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Periode</label>
                    <input type="text" name="simulation_highlight_period" class="admin-form-input"
                        value="{{ $content['simulation']['highlight_period']->value ?? 'Proyeksi dalam 60 Bulan' }}"
                        placeholder="Proyeksi dalam 60 Bulan">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Angka Total (Highlight Utama)</label>
                    <input type="text" name="simulation_highlight_total" class="admin-form-input"
                        value="{{ $content['simulation']['highlight_total']->value ?? 'Rp684.000.000' }}"
                        placeholder="Rp684.000.000">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi Highlight</label>
                <textarea name="simulation_highlight_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi di bawah angka highlight">{{ $content['simulation']['highlight_description']->value ?? 'Potensi akumulatif ilustrasi dari program kemitraan BIOTRA. Angka bersifat ilustrasi dengan catatan mengikuti performa sewa, kondisi pasar, dan ketentuan program yang berlaku.' }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Disclaimer Simulasi</label>
                <textarea name="simulation_disclaimer" class="admin-form-textarea" rows="2"
                    placeholder="Teks disclaimer simulasi">{{ $content['simulation']['disclaimer']->value ?? 'Simulasi ini bersifat ilustrasi dan bukan jaminan hasil. Pendapatan dapat berbeda tergantung okupansi, permintaan pasar, performa unit, biaya operasional, kebijakan program, serta syarat dan ketentuan yang berlaku.' }}</textarea>
            </div>
        </div>
    </div>

    {{-- =====================================================
         CARD 7: CTA Penutup
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>CTA Penutup</h2>
                <p>Banner konsultasi di bagian paling bawah halaman Kemitraan</p>
            </div>
        </div>

        <div class="admin-form-body">
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label CTA</label>
                    <input type="text" name="cta_label" class="admin-form-input"
                        value="{{ $content['cta']['label']->value ?? 'Konsultasi Kemitraan BIOTRA' }}"
                        placeholder="Konsultasi Kemitraan BIOTRA">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul CTA</label>
                    <input type="text" name="cta_title" class="admin-form-input"
                        value="{{ $content['cta']['title']->value ?? 'Tertarik Menjadi Mitra BIOTRA?' }}"
                        placeholder="Judul CTA penutup">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi CTA</label>
                <textarea name="cta_description" class="admin-form-textarea" rows="2"
                    placeholder="Deskripsi CTA">{{ $content['cta']['description']->value ?? 'Konsultasikan kebutuhan Anda bersama tim BIOTRA untuk memahami program kemitraan, skema biaya, benefit, simulasi hasil, dan ketentuan program secara lebih lengkap.' }}</textarea>
            </div>

            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Teks Tombol</label>
                    <input type="text" name="cta_button_text" class="admin-form-input"
                        value="{{ $content['cta']['button_text']->value ?? 'Konsultasi Sekarang' }}"
                        placeholder="Konsultasi Sekarang">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Link Tombol</label>
                    <input type="url" name="cta_button_link" class="admin-form-input"
                        value="{{ $content['cta']['button_link']->value ?? '' }}"
                        placeholder="{{ route('contact') }}#consultation-form">
                    <div class="admin-form-hint">Kosongkan untuk fallback ke halaman Kontak#consultation-form.</div>
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Catatan di Bawah Tombol</label>
                <input type="text" name="cta_note" class="admin-form-input"
                    value="{{ $content['cta']['note']->value ?? 'Informasi program mengikuti syarat dan ketentuan yang berlaku.' }}"
                    placeholder="Informasi program mengikuti syarat dan ketentuan yang berlaku.">
            </div>
        </div>
    </div>

    {{-- Submit --}}
    <div style="display:flex;justify-content:flex-end;gap:16px;margin-bottom:48px;">
        <a href="{{ route('partnership') }}" target="_blank" class="admin-button-outline">
            <i class="bi bi-eye"></i> Pratinjau Halaman
        </a>
        <button type="submit" class="admin-button">
            <i class="bi bi-floppy"></i> Simpan Semua Perubahan
        </button>
    </div>

</form>

@endsection
