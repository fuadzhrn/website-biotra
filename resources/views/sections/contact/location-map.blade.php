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
                    src="{{ content_value('contact', 'location_map', 'maps_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1667.822487947873!2d106.81753639358794!3d-6.161183943536069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f675f94017cb%3A0x156a91c20531e7f3!2sJl.%20Gajah%20Mada%20No.19-26%2C%20RT.2%2FRW.1%2C%20Petojo%20Utara%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010130!5e0!3m2!1sid!2sid!4v1780902188662!5m2!1sid!2sid') }}"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>
