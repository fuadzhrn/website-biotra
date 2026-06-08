<section class="location-map-section" id="contact-location">
    <div class="container location-map-container">
        <div class="location-map-header">
            <span class="contact-section-label">
                {{ content_value('contact', 'location_map', 'label', 'Lokasi BIOTRA') }}
            </span>

            <h2>
                {{ content_value('contact', 'location_map', 'title', 'Temukan Lokasi dan Informasi Kunjungan BIOTRA') }}
            </h2>

            <p>
                {{ content_value('contact', 'location_map', 'description', 'Untuk kebutuhan konsultasi langsung atau informasi lebih lanjut, Anda dapat melihat lokasi BIOTRA melalui peta yang tersedia. Informasi alamat dapat disesuaikan berdasarkan data resmi perusahaan.') }}
            </p>
        </div>

        <div class="location-map-wrapper">
            <div class="location-address-card">
                <div class="location-address-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>

                <div class="location-address-content">
                    <span>{{ content_value('contact', 'location_map', 'address_label', 'Alamat BIOTRA') }}</span>

                    <h3>
                        {{ content_value('contact', 'location_map', 'address_title', 'Lokasi Kantor BIOTRA') }}
                    </h3>

                    <p>
                        {{ content_value('contact', 'location_map', 'address', 'Alamat kantor BIOTRA akan disesuaikan berdasarkan informasi resmi perusahaan.') }}
                    </p>

                    <div class="location-info-list">
                        <div class="location-info-item">
                            <i class="bi bi-clock"></i>
                            <span>{{ content_value('contact', 'location_map', 'service_hours', 'Senin – Sabtu, 09.00 – 17.00 WIB') }}</span>
                        </div>

                        <div class="location-info-item">
                            <i class="bi bi-chat-dots"></i>
                            <span>{{ content_value('contact', 'location_map', 'visit_note', 'Konfirmasi jadwal sebelum melakukan kunjungan') }}</span>
                        </div>
                    </div>

                    <a href="{{ content_value('contact', 'location_map', 'maps_button_link', 'https://maps.google.com') }}"
                       target="_blank" class="location-map-button">
                        {{ content_value('contact', 'location_map', 'maps_button_text', 'Buka di Google Maps') }}
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>

            <div class="google-map-box">
                <iframe
                    src="{{ content_value('contact', 'location_map', 'maps_embed', 'https://www.google.com/maps?q=Jakarta%20Indonesia&output=embed') }}"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>
