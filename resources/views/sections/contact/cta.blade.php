<section class="contact-final-cta-section">
    <div class="container">
        <div class="contact-final-cta">
            <div class="contact-final-cta-inner">
                <span class="contact-cta-label">
                    {{ content_value('contact', 'cta', 'label', 'Konsultasi Sekarang') }}
                </span>

                <h2>
                    {{ content_value('contact', 'cta', 'title', 'Siap Mengenal BIOTRA Lebih Dekat?') }}
                </h2>

                <p>
                    {{ content_value('contact', 'cta', 'description', 'Hubungi tim BIOTRA sekarang untuk mendapatkan informasi lebih lengkap mengenai program kemitraan, produk layanan, dan ketentuan yang berlaku.') }}
                </p>
            </div>

            <a href="{{ content_value('contact', 'cta', 'button_link', 'https://wa.me/6281234567890') }}"
               target="_blank" class="contact-cta-button">
                <i class="bi bi-whatsapp"></i>
                {{ content_value('contact', 'cta', 'button_text', 'Hubungi BIOTRA Sekarang') }}
            </a>
        </div>
    </div>
</section>
