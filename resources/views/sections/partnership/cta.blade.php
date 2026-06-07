<section class="partnership-final-cta-section">
    <div class="container">
        <div class="partnership-final-cta">
            <div class="partnership-final-cta-content">
                <span class="partnership-final-cta-label">
                    {{ content_value('partnership', 'cta', 'label', 'Konsultasi Kemitraan BIOTRA') }}
                </span>

                <h2>
                    {{ content_value('partnership', 'cta', 'title', 'Tertarik Menjadi Mitra BIOTRA?') }}
                </h2>

                <p>
                    {{ content_value('partnership', 'cta', 'description', 'Konsultasikan kebutuhan Anda bersama tim BIOTRA untuk memahami program kemitraan, skema biaya, benefit, simulasi hasil, dan ketentuan program secara lebih lengkap.') }}
                </p>
            </div>

            <div class="partnership-final-cta-actions">
                <a href="{{ content_value('partnership', 'cta', 'button_link', route('contact') . '#consultation-form') }}" class="partnership-final-cta-button">
                    {{ content_value('partnership', 'cta', 'button_text', 'Konsultasi Sekarang') }}
                    <i class="bi bi-arrow-right"></i>
                </a>

                <span>
                    {{ content_value('partnership', 'cta', 'note', 'Informasi program mengikuti syarat dan ketentuan yang berlaku.') }}
                </span>
            </div>
        </div>
    </div>
</section>
