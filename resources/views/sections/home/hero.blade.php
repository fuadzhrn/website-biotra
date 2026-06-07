<section class="hero-section">
    <div class="hero-overlay"></div>

    <div class="container hero-container">
        <div class="hero-content">
            <span class="hero-label">
                {{ content_value('home', 'hero', 'label', 'Program Kemitraan Properti & Mobilitas') }}
            </span>

            <h1>
                {{ content_value('home', 'hero', 'title', 'Punya Bisnis Tanpa Ribet di Sektor Properti & Mobilitas') }}
            </h1>

            <p class="hero-description">
                {{ content_value('home', 'hero', 'description', 'BIOTRA membuka akses kemitraan modern untuk properti, penginapan, apartemen, dan rental kendaraan dengan sistem yang lebih praktis dan terkelola.') }}
            </p>

            <div class="hero-badges">
                <span class="hero-badge-highlight">
                    <i class="bi bi-shield-fill"></i>
                    Hak Pakai Gratis + Hak Sewa
                </span>
            </div>

            <div class="hero-actions">
                <a href="{{ content_value('home', 'hero', 'primary_button_link', route('contact')) }}"
                   class="btn-primary">
                    {{ content_value('home', 'hero', 'primary_button_text', 'Konsultasi Sekarang') }}
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
                        <h4>Hak Pakai + Hak Sewa</h4>
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
