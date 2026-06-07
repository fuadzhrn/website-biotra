@extends('layouts.admin')

@section('title', 'Kelola Produk & Layanan — Admin BIOTRA')
@section('page_title', 'Kelola Produk & Layanan')
@section('page_subtitle', 'Atur informasi layanan villa, hotel, apartemen, dan rental kendaraan')

@section('content')

@if(session('success'))
    <div class="admin-alert-success admin-mb-24">
        <i class="bi bi-check-circle-fill"></i>
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.contents.products-services.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- =====================================================
         CARD 1: Page Header
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>Header Halaman Produk & Layanan</h2>
                <p>Label, judul, deskripsi, dan catatan di bagian atas halaman</p>
            </div>
            <a href="{{ route('products-services') }}" target="_blank" class="admin-button-outline sm">
                <i class="bi bi-eye"></i> Pratinjau
            </a>
        </div>

        <div class="admin-form-body">
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="page_header_label" class="admin-form-input"
                        value="{{ $content['page_header']['label']->value ?? 'Produk & Layanan BIOTRA' }}"
                        placeholder="Produk & Layanan BIOTRA">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul Utama (H1)</label>
                    <input type="text" name="page_header_title" class="admin-form-input"
                        value="{{ $content['page_header']['title']->value ?? 'Akses Bisnis Properti, Akomodasi, dan Mobilitas dalam Satu Ekosistem' }}"
                        placeholder="Judul halaman produk">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi</label>
                <textarea name="page_header_description" class="admin-form-textarea" rows="3"
                    placeholder="Deskripsi halaman produk & layanan">{{ $content['page_header']['description']->value ?? 'BIOTRA menghadirkan beberapa kategori produk dan layanan yang berkaitan dengan kebutuhan penginapan, staycation, perjalanan bisnis, pariwisata, dan transportasi. Setiap kategori dirancang untuk mendukung program kemitraan BIOTRA dengan sistem yang lebih praktis, terkelola, dan mudah dipahami oleh calon mitra.' }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Catatan Gambar</label>
                <input type="text" name="page_header_note" class="admin-form-input"
                    value="{{ $content['page_header']['note']->value ?? 'Gambar yang ditampilkan merupakan dokumentasi atau representasi unit sesuai kategori layanan BIOTRA.' }}"
                    placeholder="Catatan kecil di bawah deskripsi">
            </div>
        </div>
    </div>

    {{-- =====================================================
         MACRO: Service Card
         Digunakan untuk Villa, Hotel, Apartemen, Rental
    ====================================================== --}}

    @php
    $services = [
        [
            'section'       => 'villa',
            'prefix'        => 'villa',
            'title'         => 'Villa & Staycation',
            'defaults' => [
                'label'        => 'Villa & Staycation',
                'title'        => 'Peluang Akomodasi Wisata di Bali dengan Konsep yang Lebih Praktis',
                'paragraph_1'  => 'Villa & Staycation Bali menjadi salah satu kategori utama BIOTRA yang berfokus pada kebutuhan penginapan wisata, liburan, dan staycation. Kategori ini dirancang untuk menghadirkan akses bisnis di sektor pariwisata dengan sistem kemitraan yang lebih praktis dan terkelola.',
                'paragraph_2'  => 'Dengan tingginya kebutuhan akomodasi wisata, villa dan staycation menjadi salah satu sektor yang potensial untuk digunakan maupun disewakan sesuai ketentuan program BIOTRA.',
                'benefit_1'    => 'Cocok untuk kebutuhan liburan dan staycation',
                'benefit_2'    => 'Berada dalam sektor pariwisata dan akomodasi',
                'benefit_3'    => 'Dapat digunakan atau disewakan sesuai program',
                'benefit_4'    => 'Operasional dibantu oleh sistem BIOTRA',
                'button_text'  => 'Konsultasi Produk Ini',
                'button_link'  => '',
                'location_badge' => 'Bali',
            ],
            'img_defaults' => [
                'main_image' => 'assets/img/products-services/villa-main.jpg',
                'image_1'    => 'assets/img/products-services/villa-1.jpg',
                'image_2'    => 'assets/img/products-services/villa-2.jpg',
                'image_3'    => 'assets/img/products-services/villa-3.jpg',
            ],
        ],
        [
            'section'       => 'hotel',
            'prefix'        => 'hotel',
            'title'         => 'Hotel & Penginapan',
            'defaults' => [
                'label'        => 'Hotel & Penginapan',
                'title'        => 'Akomodasi Strategis untuk Perjalanan Bisnis dan Kebutuhan Menginap',
                'paragraph_1'  => 'Hotel & Penginapan Jakarta / PIK 2 hadir untuk menjawab kebutuhan akomodasi di area strategis, baik untuk perjalanan bisnis, wisata, maupun kebutuhan menginap jangka pendek. Kategori ini menjadi bagian dari ekosistem BIOTRA dalam sektor properti dan penginapan.',
                'paragraph_2'  => 'Dengan lokasi yang mendukung mobilitas perkotaan, kategori hotel dan penginapan dapat menjadi pilihan bagi pasar yang membutuhkan tempat menginap praktis, nyaman, dan mudah dijangkau.',
                'benefit_1'    => 'Cocok untuk perjalanan bisnis dan wisata',
                'benefit_2'    => 'Berada di area strategis Jakarta / PIK 2',
                'benefit_3'    => 'Mendukung kebutuhan menginap jangka pendek',
                'benefit_4'    => 'Terhubung dengan ekosistem akomodasi BIOTRA',
                'button_text'  => 'Konsultasi Produk Ini',
                'button_link'  => '',
                'location_badge' => 'Jakarta / PIK 2',
            ],
            'img_defaults' => [
                'main_image' => 'assets/img/products-services/hotel-main.jpg',
                'image_1'    => 'assets/img/products-services/hotel-1.jpg',
                'image_2'    => 'assets/img/products-services/hotel-2.jpg',
                'image_3'    => 'assets/img/products-services/hotel-3.jpg',
            ],
        ],
        [
            'section'       => 'apartment',
            'prefix'        => 'apartment',
            'title'         => 'Apartemen Harian & Mingguan',
            'defaults' => [
                'label'        => 'Apartemen Harian & Mingguan',
                'title'        => 'Hunian Fleksibel untuk Kebutuhan Bisnis, Kerja, dan Tinggal Sementara',
                'paragraph_1'  => 'Apartemen Harian & Mingguan BIOTRA ditujukan untuk kebutuhan hunian sementara yang lebih fleksibel, khususnya di area Bekasi dan Cikarang yang dekat dengan aktivitas bisnis, industri, dan mobilitas kerja.',
                'paragraph_2'  => 'Kategori ini cocok untuk pasar yang membutuhkan tempat tinggal sementara, baik untuk pekerja, perjalanan bisnis, maupun kebutuhan menginap dalam jangka pendek hingga mingguan.',
                'benefit_1'    => 'Cocok untuk pekerja dan perjalanan bisnis',
                'benefit_2'    => 'Mendukung kebutuhan tinggal harian atau mingguan',
                'benefit_3'    => 'Berada di area Bekasi & Cikarang',
                'benefit_4'    => 'Fleksibel untuk kebutuhan hunian sementara',
                'button_text'  => 'Konsultasi Produk Ini',
                'button_link'  => '',
                'location_badge' => 'Bekasi & Cikarang',
            ],
            'img_defaults' => [
                'main_image' => 'assets/img/products-services/apartment-main.jpg',
                'image_1'    => 'assets/img/products-services/apartment-1.jpg',
                'image_2'    => 'assets/img/products-services/apartment-2.jpg',
                'image_3'    => 'assets/img/products-services/apartment-3.jpg',
            ],
        ],
        [
            'section'       => 'rental',
            'prefix'        => 'rental',
            'title'         => 'Rental Kendaraan',
            'defaults' => [
                'label'        => 'Rental Kendaraan',
                'title'        => 'Solusi Mobilitas untuk Perjalanan Wisata, Bisnis, dan Transportasi Harian',
                'paragraph_1'  => 'Rental Kendaraan Wisata & Bisnis menjadi bagian dari ekosistem mobilitas BIOTRA yang mendukung kebutuhan perjalanan wisata, bisnis, dan transportasi harian. Kategori ini melengkapi sektor properti dan akomodasi agar program BIOTRA memiliki cakupan layanan yang lebih luas.',
                'paragraph_2'  => 'Dengan adanya layanan mobilitas, BIOTRA tidak hanya berfokus pada tempat menginap, tetapi juga mendukung kebutuhan perjalanan dan transportasi yang terus berjalan.',
                'benefit_1'    => 'Cocok untuk perjalanan wisata dan bisnis',
                'benefit_2'    => 'Mendukung kebutuhan mobilitas harian',
                'benefit_3'    => 'Dapat terhubung dengan layanan penginapan',
                'benefit_4'    => 'Operasional kendaraan dapat dibantu sesuai program',
                'button_text'  => 'Konsultasi Produk Ini',
                'button_link'  => '',
                'location_badge' => 'Mobility',
            ],
            'img_defaults' => [
                'main_image' => 'assets/img/products-services/rental-main.jpg',
                'image_1'    => 'assets/img/products-services/rental-1.jpg',
                'image_2'    => 'assets/img/products-services/rental-2.jpg',
                'image_3'    => 'assets/img/products-services/rental-3.jpg',
            ],
        ],
    ];
    @endphp

    @foreach($services as $svc)
    @php
        $sec = $svc['section'];
        $pre = $svc['prefix'];
        $db  = $content[$sec] ?? [];
        $def = $svc['defaults'];
        $img = $svc['img_defaults'];
    @endphp
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>{{ $svc['title'] }}</h2>
                <p>Teks, poin manfaat, tombol, dan gambar section {{ $svc['title'] }}</p>
            </div>
        </div>

        <div class="admin-form-body">

            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Informasi Utama</div>

            <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;margin-bottom:20px;">
                <div class="admin-form-group" style="margin-bottom:0;">
                    <label class="admin-form-label">Label Section</label>
                    <input type="text" name="{{ $pre }}_label" class="admin-form-input"
                        value="{{ $db['label']->value ?? $def['label'] }}"
                        placeholder="{{ $def['label'] }}">
                </div>
                <div class="admin-form-group" style="margin-bottom:0;">
                    <label class="admin-form-label">Badge Lokasi</label>
                    <input type="text" name="{{ $pre }}_location_badge" class="admin-form-input"
                        value="{{ $db['location_badge']->value ?? $def['location_badge'] }}"
                        placeholder="{{ $def['location_badge'] }}">
                </div>
                <div class="admin-form-group" style="margin-bottom:0;">
                    <label class="admin-form-label">Teks Tombol CTA</label>
                    <input type="text" name="{{ $pre }}_button_text" class="admin-form-input"
                        value="{{ $db['button_text']->value ?? $def['button_text'] }}"
                        placeholder="{{ $def['button_text'] }}">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Judul Section (H2)</label>
                <input type="text" name="{{ $pre }}_title" class="admin-form-input"
                    value="{{ $db['title']->value ?? $def['title'] }}"
                    placeholder="{{ $def['title'] }}">
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Link Tombol CTA</label>
                <input type="url" name="{{ $pre }}_button_link" class="admin-form-input"
                    value="{{ $db['button_link']->value ?? '' }}"
                    placeholder="Kosongkan untuk menggunakan halaman Kontak">
                <div class="admin-form-hint">Kosongkan untuk otomatis mengarah ke halaman Kontak.</div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 1</label>
                <textarea name="{{ $pre }}_paragraph_1" class="admin-form-textarea" rows="3"
                    placeholder="{{ $def['paragraph_1'] }}">{{ $db['paragraph_1']->value ?? $def['paragraph_1'] }}</textarea>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Paragraf 2</label>
                <textarea name="{{ $pre }}_paragraph_2" class="admin-form-textarea" rows="3"
                    placeholder="{{ $def['paragraph_2'] }}">{{ $db['paragraph_2']->value ?? $def['paragraph_2'] }}</textarea>
            </div>

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Poin Manfaat</div>

            @foreach([1,2,3,4] as $n)
            <div class="admin-form-group">
                <label class="admin-form-label">Poin Manfaat {{ $n }}</label>
                <input type="text" name="{{ $pre }}_benefit_{{ $n }}" class="admin-form-input"
                    value="{{ $db['benefit_' . $n]->value ?? $def['benefit_' . $n] }}"
                    placeholder="{{ $def['benefit_' . $n] }}">
            </div>
            @endforeach

            <div style="height:1px;background:rgba(255,255,255,0.06);margin:28px 0;"></div>
            <div style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--text-muted);margin-bottom:20px;">Gambar</div>

            <div class="admin-form-notice" style="margin-bottom:24px;">
                <i class="bi bi-info-circle"></i>
                Biarkan kosong jika tidak ingin mengganti gambar. Format: JPG, PNG, WebP. Maks 4MB per gambar.
            </div>

            {{-- Main image --}}
            <div style="display:flex;align-items:flex-start;gap:20px;margin-bottom:20px;">
                <div class="admin-form-image-preview" style="flex-shrink:0;">
                    @if(!empty($db['main_image']->image_path ?? null))
                        <img src="{{ asset('storage/' . $db['main_image']->image_path) }}" alt="Gambar utama {{ $svc['title'] }}">
                    @else
                        <img src="{{ asset($img['main_image']) }}" alt="Default gambar utama {{ $svc['title'] }}">
                    @endif
                </div>
                <div class="admin-form-group" style="flex:1;margin-bottom:0;">
                    <label class="admin-form-label">Gambar Utama</label>
                    <input type="file" name="{{ $pre }}_main_image" class="admin-form-file" accept="image/*">
                    <div class="admin-form-hint">Gambar besar yang tampil di panel utama section.</div>
                </div>
            </div>

            {{-- Thumbnails --}}
            <div class="admin-form-image-row">
                @foreach([1,2,3] as $n)
                <div class="admin-form-image-upload">
                    <div class="admin-form-image-preview">
                        @if(!empty($db['image_' . $n]->image_path ?? null))
                            <img src="{{ asset('storage/' . $db['image_' . $n]->image_path) }}" alt="Thumbnail {{ $n }} {{ $svc['title'] }}">
                        @else
                            <img src="{{ asset($img['image_' . $n]) }}" alt="Default thumbnail {{ $n }} {{ $svc['title'] }}">
                        @endif
                    </div>
                    <label class="admin-form-label">Thumbnail {{ $n }}</label>
                    <input type="file" name="{{ $pre }}_image_{{ $n }}" class="admin-form-file" accept="image/*">
                </div>
                @endforeach
            </div>

        </div>
    </div>
    @endforeach

    {{-- =====================================================
         CARD 6: CTA Penutup
    ====================================================== --}}
    <div class="admin-card admin-mb-24">
        <div class="admin-card-header">
            <div class="admin-card-header-left">
                <h2>CTA Penutup</h2>
                <p>Banner konsultasi di bagian paling bawah halaman Produk & Layanan</p>
            </div>
        </div>

        <div class="admin-form-body">
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label class="admin-form-label">Label CTA</label>
                    <input type="text" name="cta_label" class="admin-form-input"
                        value="{{ $content['cta']['label']->value ?? 'Konsultasi Produk BIOTRA' }}"
                        placeholder="Konsultasi Produk BIOTRA">
                </div>
                <div class="admin-form-group">
                    <label class="admin-form-label">Judul CTA</label>
                    <input type="text" name="cta_title" class="admin-form-input"
                        value="{{ $content['cta']['title']->value ?? 'Ingin Mengetahui Produk BIOTRA yang Paling Sesuai?' }}"
                        placeholder="Judul CTA penutup">
                </div>
            </div>

            <div class="admin-form-group">
                <label class="admin-form-label">Deskripsi CTA</label>
                <textarea name="cta_description" class="admin-form-textarea" rows="3"
                    placeholder="Deskripsi CTA penutup">{{ $content['cta']['description']->value ?? 'Setiap kategori produk BIOTRA memiliki karakter dan potensi yang berbeda. Konsultasikan kebutuhan Anda bersama tim BIOTRA untuk memahami pilihan program, sistem kemitraan, dan informasi layanan secara lebih lengkap.' }}</textarea>
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
                        placeholder="Kosongkan untuk menggunakan halaman Kontak">
                    <div class="admin-form-hint">Kosongkan untuk otomatis mengarah ke halaman Kontak.</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Submit --}}
    <div style="display:flex;justify-content:flex-end;gap:16px;margin-bottom:48px;">
        <a href="{{ route('products-services') }}" target="_blank" class="admin-button-outline">
            <i class="bi bi-eye"></i> Pratinjau Halaman
        </a>
        <button type="submit" class="admin-button">
            <i class="bi bi-floppy"></i> Simpan Semua Perubahan
        </button>
    </div>

</form>

@endsection
