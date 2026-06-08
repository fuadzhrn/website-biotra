<section class="consultation-form-section" id="consultation-form">
    <div class="container consultation-form-container">
        <div class="consultation-form-card">
            <div class="consultation-form-header">
                <span class="contact-section-label">
                    {{ content_value('contact', 'consultation_form', 'label', 'Form Konsultasi') }}
                </span>

                <h2>
                    {{ content_value('contact', 'consultation_form', 'title', 'Kirim Pertanyaan atau Kebutuhan Anda') }}
                </h2>

                <p>
                    {{ content_value('contact', 'consultation_form', 'description', 'Isi form konsultasi berikut agar tim BIOTRA dapat memahami kebutuhan Anda dengan lebih baik. Setelah data dikirim, Anda dapat melanjutkan komunikasi melalui WhatsApp untuk mendapatkan penjelasan lebih lengkap.') }}
                </p>
            </div>

            <form class="consultation-form" id="consultationForm"
                  data-whatsapp-target="{{ content_value('contact', 'consultation_form', 'whatsapp_target_number', '6285188341022') }}">
                <div class="form-row">
                    <div class="form-group">
                        <label for="contactName">
                            {{ content_value('contact', 'consultation_form', 'name_label', 'Nama Lengkap') }}
                        </label>
                        <input
                            type="text"
                            id="contactName"
                            name="name"
                            placeholder="{{ content_value('contact', 'consultation_form', 'name_placeholder', 'Masukkan nama lengkap Anda') }}"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contactWhatsapp">
                            {{ content_value('contact', 'consultation_form', 'whatsapp_label', 'Nomor WhatsApp') }}
                        </label>
                        <input
                            type="text"
                            id="contactWhatsapp"
                            name="whatsapp"
                            placeholder="{{ content_value('contact', 'consultation_form', 'whatsapp_placeholder', 'Contoh: 0812-3456-7890') }}"
                            required
                        >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="contactEmail">
                            {{ content_value('contact', 'consultation_form', 'email_label', 'Email') }}
                        </label>
                        <input
                            type="email"
                            id="contactEmail"
                            name="email"
                            placeholder="{{ content_value('contact', 'consultation_form', 'email_placeholder', 'Masukkan email Anda, opsional') }}"
                        >
                    </div>

                    @if(content_value('contact', 'consultation_form', 'promo_is_active', ''))
                    <div class="consultation-promo-banner">
                        <div class="consultation-promo-icon">
                            <i class="bi bi-gift-fill"></i>
                        </div>
                        <div class="consultation-promo-content">
                            <strong>{{ content_value('contact', 'consultation_form', 'promo_title', '100 Orang Pertama') }}</strong>
                            <p>{{ content_value('contact', 'consultation_form', 'promo_description', 'Daftar sekarang dan dapatkan konsultasi eksklusif untuk 100 pendaftar pertama program kemitraan BIOTRA.') }}</p>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="contactMessage">
                        {{ content_value('contact', 'consultation_form', 'message_label', 'Pesan') }}
                    </label>
                    <textarea
                        id="contactMessage"
                        name="message"
                        rows="6"
                        placeholder="{{ content_value('contact', 'consultation_form', 'message_placeholder', 'Tuliskan pertanyaan atau kebutuhan konsultasi Anda') }}"
                        required
                    ></textarea>
                </div>

                <div class="form-footer">
                    <button type="submit" class="consultation-submit-button">
                        {{ content_value('contact', 'consultation_form', 'button_text', 'Kirim Konsultasi') }}
                        <i class="bi bi-send"></i>
                    </button>

                    <p>
                        {{ content_value('contact', 'consultation_form', 'note', 'Data yang Anda kirim digunakan untuk membantu tim BIOTRA memberikan informasi yang lebih sesuai dengan kebutuhan Anda.') }}
                    </p>
                </div>
            </form>
        </div>

        <div class="quick-help-panel">
            <div class="quick-help-header">
                <span>{{ content_value('contact', 'quick_help', 'label', 'Bantuan Cepat') }}</span>

                <h3>
                    {{ content_value('contact', 'quick_help', 'title', 'Apa yang ingin Anda tanyakan?') }}
                </h3>

                <p>
                    {{ content_value('contact', 'quick_help', 'description', 'Pilih topik konsultasi agar komunikasi dengan tim BIOTRA lebih terarah dan mudah dipahami.') }}
                </p>
            </div>

            <div class="quick-help-list">
                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <div>
                        <h4>{{ content_value('contact', 'quick_help', 'item_1_title', 'Kemitraan BIOTRA') }}</h4>
                        <p>{{ content_value('contact', 'quick_help', 'item_1_description', 'Informasi alur bergabung, skema program, dan benefit mitra.') }}</p>
                    </div>
                </div>

                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-grid"></i>
                    </div>
                    <div>
                        <h4>{{ content_value('contact', 'quick_help', 'item_2_title', 'Produk & Layanan') }}</h4>
                        <p>{{ content_value('contact', 'quick_help', 'item_2_description', 'Informasi villa, hotel, apartemen, dan rental kendaraan.') }}</p>
                    </div>
                </div>

                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <div>
                        <h4>{{ content_value('contact', 'quick_help', 'item_3_title', 'Biaya Bergabung') }}</h4>
                        <p>{{ content_value('contact', 'quick_help', 'item_3_description', 'Informasi paket, skema pembayaran, dan ketentuan program.') }}</p>
                    </div>
                </div>

                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div>
                        <h4>{{ content_value('contact', 'quick_help', 'item_4_title', 'Simulasi Hasil') }}</h4>
                        <p>{{ content_value('contact', 'quick_help', 'item_4_description', 'Penjelasan simulasi potensi hasil dan catatan pentingnya.') }}</p>
                    </div>
                </div>
            </div>

            <div class="quick-help-note">
                <i class="bi bi-info-circle"></i>
                <span>
                    {{ content_value('contact', 'quick_help', 'note', 'Untuk respons lebih cepat, Anda juga dapat langsung menghubungi BIOTRA melalui WhatsApp.') }}
                </span>
            </div>
        </div>
    </div>
</section>
