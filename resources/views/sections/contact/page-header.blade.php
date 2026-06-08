<section class="contact-page-header">
    <div class="contact-header-pattern"></div>

    <div class="container contact-page-header-container">
        <div class="contact-breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <i class="bi bi-chevron-right"></i>
            <span>{{ content_value('contact', 'page_header', 'breadcrumb_title', 'Kontak') }}</span>
        </div>

        <div class="contact-page-header-content">
            <span class="contact-header-label">
                {{ content_value('contact', 'page_header', 'label', 'Kontak BIOTRA') }}
            </span>

            <h1>
                {{ content_value('contact', 'page_header', 'title', 'Hubungi BIOTRA untuk Konsultasi Program dan Layanan') }}
            </h1>

            <p>
                {{ content_value('contact', 'page_header', 'description', 'Punya pertanyaan tentang program kemitraan, produk layanan, biaya bergabung, atau simulasi potensi hasil? Tim BIOTRA siap membantu memberikan informasi yang Anda butuhkan secara lebih jelas dan terarah.') }}
            </p>

            <div class="contact-header-note">
                <i class="bi bi-chat-dots"></i>
                <span>
                    {{ content_value('contact', 'page_header', 'note', 'Silakan hubungi BIOTRA melalui WhatsApp, form konsultasi, atau kunjungi lokasi yang tersedia.') }}
                </span>
            </div>
        </div>
    </div>
</section>
