<section class="contact-info-section">
    <div class="container contact-info-container">
        <div class="contact-info-content">
            <span class="contact-section-label">
                {{ content_value('contact', 'contact_info', 'label', 'Hubungi Kami') }}
            </span>

            <h2>
                {{ content_value('contact', 'contact_info', 'title', 'Konsultasikan Kebutuhan Anda Bersama Tim BIOTRA') }}
            </h2>

            <p>
                {{ content_value('contact', 'contact_info', 'paragraph_1', 'Jika Anda tertarik mengetahui lebih lanjut tentang program kemitraan BIOTRA, produk layanan, skema biaya, atau informasi lainnya, Anda dapat menghubungi tim BIOTRA melalui kontak resmi yang tersedia.') }}
            </p>

            <p>
                {{ content_value('contact', 'contact_info', 'paragraph_2', 'Tim BIOTRA akan membantu menjelaskan program secara bertahap agar Anda dapat memahami pilihan layanan, benefit, dan ketentuan yang sesuai dengan kebutuhan Anda.') }}
            </p>

            <div class="contact-info-actions">
                <a href="{{ content_value('contact', 'contact_info', 'whatsapp_button_link', 'https://wa.me/6281234567890') }}"
                   target="_blank" class="contact-whatsapp-button">
                    <i class="bi bi-whatsapp"></i>
                    {{ content_value('contact', 'contact_info', 'whatsapp_button_text', 'Hubungi via WhatsApp') }}
                </a>

                <a href="{{ content_value('contact', 'contact_info', 'location_button_link', '#contact-location') }}"
                   class="contact-outline-button">
                    {{ content_value('contact', 'contact_info', 'location_button_text', 'Lihat Lokasi') }}
                    <i class="bi bi-arrow-down"></i>
                </a>
            </div>
        </div>

        <div class="contact-panel-wrapper">
            <div class="contact-panel">
                <div class="contact-panel-header">
                    <span>{{ content_value('contact', 'contact_panel', 'panel_label', 'Kontak Resmi') }}</span>
                    <h3>{{ content_value('contact', 'contact_panel', 'panel_title', 'BIOTRA') }}</h3>
                    <p>
                        {{ content_value('contact', 'contact_panel', 'panel_description', 'Gunakan informasi berikut untuk menghubungi tim BIOTRA.') }}
                    </p>
                </div>

                <div class="contact-panel-list">
                    <div class="contact-panel-item">
                        <div class="contact-panel-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <h4>{{ content_value('contact', 'contact_panel', 'whatsapp_title', 'WhatsApp') }}</h4>
                            <strong>{{ content_value('contact', 'contact_panel', 'whatsapp_value', '+62 812-3456-7890') }}</strong>
                            <p>{{ content_value('contact', 'contact_panel', 'whatsapp_description', 'Konsultasi program dan layanan BIOTRA') }}</p>
                        </div>
                    </div>

                    <div class="contact-panel-item">
                        <div class="contact-panel-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <h4>{{ content_value('contact', 'contact_panel', 'email_title', 'Email') }}</h4>
                            <strong>{{ content_value('contact', 'contact_panel', 'email_value', 'hello@biotra.co.id') }}</strong>
                            <p>{{ content_value('contact', 'contact_panel', 'email_description', 'Untuk kebutuhan informasi dan kerja sama') }}</p>
                        </div>
                    </div>

                    <div class="contact-panel-item">
                        <div class="contact-panel-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div>
                            <h4>{{ content_value('contact', 'contact_panel', 'hours_title', 'Jam Layanan') }}</h4>
                            <strong>{{ content_value('contact', 'contact_panel', 'hours_value', 'Senin – Sabtu, 09.00 – 17.00 WIB') }}</strong>
                            <p>{{ content_value('contact', 'contact_panel', 'hours_description', 'Tim BIOTRA akan merespons sesuai jam operasional') }}</p>
                        </div>
                    </div>

                    <div class="contact-panel-item">
                        <div class="contact-panel-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <h4>{{ content_value('contact', 'contact_panel', 'location_title', 'Lokasi') }}</h4>
                            <strong>{{ content_value('contact', 'contact_panel', 'location_value', 'Alamat kantor BIOTRA akan disesuaikan') }}</strong>
                            <p>{{ content_value('contact', 'contact_panel', 'location_description', 'Lokasi dapat dilihat melalui Google Maps') }}</p>
                        </div>
                    </div>
                </div>

                <div class="contact-panel-note">
                    <i class="bi bi-info-circle"></i>
                    <span>
                        {{ content_value('contact', 'contact_panel', 'note', 'Untuk kunjungan langsung, disarankan melakukan konfirmasi jadwal terlebih dahulu.') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
