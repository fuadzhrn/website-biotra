<section class="hero-section">
    <div class="hero-overlay"></div>

    <div class="container hero-container">
        <div class="hero-content">
            <span class="hero-label">
                {{ content_value('home', 'hero', 'label', 'Program Kemitraan Properti & Mobil Rental') }}
            </span>

            <h1>
                {{ content_value('home', 'hero', 'title', 'Punya Bisnis Tanpa Ribet') }}
            </h1>

            <p class="hero-description">
                {{ content_value('home', 'hero', 'description', 'BIOTRA membuka akses kemitraan modern untuk properti, penginapan, apartemen, dan rental kendaraan dengan sistem yang lebih praktis dan terkelola.') }}
            </p>

            <div class="hero-badges">
                <button class="hero-badge-highlight" id="businessModelBtn" type="button" aria-haspopup="dialog">
                    <i class="bi bi-diagram-3-fill"></i>
                    Model Bisnis Biotra
                    <i class="bi bi-chevron-right hero-badge-arrow"></i>
                </button>
            </div>

            <div class="hero-actions">
                <a href="{{ content_value('home', 'hero', 'primary_button_link', route('contact') . '#consultation-form') }}"
                   class="btn-primary">
                    {{ content_value('home', 'hero', 'primary_button_text', 'Daftar Sekarang') }}
                    <i class="bi bi-arrow-right"></i>
                </a>

                <a href="{{ content_value('home', 'hero', 'secondary_button_link', route('partnership')) }}"
                   class="btn-outline">
                    {{ content_value('home', 'hero', 'secondary_button_text', 'Lihat Program') }}
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-image-wrapper">
                <img src="{{ content_image('home', 'hero', 'image', 'assets/img/hero/hero-biotra.jpg') }}"
                     alt="Program Kemitraan BIOTRA">

                <div class="hero-floating-card floating-top">
                    <div class="floating-icon">
                        <i class="bi bi-building-check"></i>
                    </div>
                    <div>
                        <h4>Hak Pakai Gratis + Hak Sewa</h4>
                        <p>Akses penggunaan dan potensi sewa unit</p>
                    </div>
                </div>

                <div class="hero-floating-card floating-bottom">
                    <div class="floating-icon">
                        <i class="bi bi-gear-wide-connected"></i>
                    </div>
                    <div>
                        <h4>Dikelola BIOTRA</h4>
                        <p>Operasional, booking, dan maintenance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Modal Model Bisnis --}}
<div class="bm-overlay" id="businessModelOverlay" role="dialog" aria-modal="true" aria-labelledby="bmModalTitle">
    <div class="bm-modal">
        <div class="bm-modal-header">
            <h3 id="bmModalTitle">
                <i class="bi bi-diagram-3-fill"></i>
                Model Bisnis Biotra
            </h3>
            <button class="bm-modal-close" id="businessModelClose" type="button" aria-label="Tutup">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <div class="bm-modal-body">
            <div class="bm-point">
                <div class="bm-point-header">
                    <span class="bm-point-icon"><i class="bi bi-house-check-fill"></i></span>
                    <h4>Hak Pakai</h4>
                </div>
                <ul class="bm-point-list">
                    <li><i class="bi bi-check2"></i> Hak pakai unit gratis</li>
                    <li><i class="bi bi-check2"></i> Diskon sampai 60% sepanjang tahun</li>
                </ul>
            </div>

            <div class="bm-point">
                <div class="bm-point-header">
                    <span class="bm-point-icon"><i class="bi bi-currency-dollar"></i></span>
                    <h4>Hak Monetisasi</h4>
                </div>
                <ul class="bm-point-list">
                    <li><i class="bi bi-check2"></i> Bisa disewakan</li>
                    <li><i class="bi bi-check2"></i> Sistem dikelola Biotra</li>
                    <li><i class="bi bi-check2"></i> Bagi hasil 60% ke mitra</li>
                </ul>
            </div>

            <div class="bm-point">
                <div class="bm-point-header">
                    <span class="bm-point-icon"><i class="bi bi-gear-fill"></i></span>
                    <h4>Tanpa Ribet Operasional</h4>
                </div>
                <ul class="bm-point-list">
                    <li><i class="bi bi-check2"></i> Tidak perlu urus driver</li>
                    <li><i class="bi bi-check2"></i> Tidak perlu urus operasional</li>
                    <li><i class="bi bi-check2"></i> Tidak perlu maintenance</li>
                </ul>
            </div>
        </div>

        <div class="bm-modal-footer">
            <a href="{{ route('contact') }}#consultation-form" class="bm-cta-btn">
                Daftar Sekarang <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
