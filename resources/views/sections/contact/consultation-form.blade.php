<section class="consultation-form-section">
    <div class="container consultation-form-container">
        <div class="consultation-form-card">
            <div class="consultation-form-header">
                <span class="contact-section-label">
                    Form Konsultasi
                </span>

                <h2>
                    Kirim Pertanyaan atau Kebutuhan Anda
                </h2>

                <p>
                    Isi form konsultasi berikut agar tim BIOTRA dapat memahami
                    kebutuhan Anda dengan lebih baik. Setelah data dikirim, Anda
                    dapat melanjutkan komunikasi melalui WhatsApp untuk mendapatkan
                    penjelasan lebih lengkap.
                </p>
            </div>

            <form class="consultation-form" id="consultationForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="contactName">Nama Lengkap</label>
                        <input 
                            type="text" 
                            id="contactName" 
                            name="name" 
                            placeholder="Masukkan nama lengkap Anda"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contactWhatsapp">Nomor WhatsApp</label>
                        <input 
                            type="text" 
                            id="contactWhatsapp" 
                            name="whatsapp" 
                            placeholder="Contoh: 0812-3456-7890"
                            required
                        >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="contactEmail">Email</label>
                        <input 
                            type="email" 
                            id="contactEmail" 
                            name="email" 
                            placeholder="Masukkan email Anda, opsional"
                        >
                    </div>

                    <div class="form-group">
                        <label for="contactNeed">Kebutuhan Konsultasi</label>
                        <select id="contactNeed" name="need" required>
                            <option value="">Pilih kebutuhan konsultasi</option>
                            <option value="Kemitraan BIOTRA">Kemitraan BIOTRA</option>
                            <option value="Produk & Layanan">Produk & Layanan</option>
                            <option value="Villa & Staycation">Villa & Staycation</option>
                            <option value="Hotel & Penginapan">Hotel & Penginapan</option>
                            <option value="Apartemen Harian & Mingguan">Apartemen Harian & Mingguan</option>
                            <option value="Rental Kendaraan">Rental Kendaraan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contactMessage">Pesan</label>
                    <textarea 
                        id="contactMessage" 
                        name="message" 
                        rows="6"
                        placeholder="Tuliskan pertanyaan atau kebutuhan konsultasi Anda"
                        required
                    ></textarea>
                </div>

                <div class="form-footer">
                    <button type="submit" class="consultation-submit-button">
                        Kirim Konsultasi
                        <i class="bi bi-send"></i>
                    </button>

                    <p>
                        Data yang Anda kirim digunakan untuk membantu tim BIOTRA
                        memberikan informasi yang lebih sesuai dengan kebutuhan Anda.
                    </p>
                </div>
            </form>
        </div>

        <div class="quick-help-panel">
            <div class="quick-help-header">
                <span>Bantuan Cepat</span>

                <h3>
                    Apa yang ingin Anda tanyakan?
                </h3>

                <p>
                    Pilih topik konsultasi agar komunikasi dengan tim BIOTRA lebih
                    terarah dan mudah dipahami.
                </p>
            </div>

            <div class="quick-help-list">
                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <div>
                        <h4>Kemitraan BIOTRA</h4>
                        <p>Informasi alur bergabung, skema program, dan benefit mitra.</p>
                    </div>
                </div>

                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-grid"></i>
                    </div>

                    <div>
                        <h4>Produk & Layanan</h4>
                        <p>Informasi villa, hotel, apartemen, dan rental kendaraan.</p>
                    </div>
                </div>

                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-cash-coin"></i>
                    </div>

                    <div>
                        <h4>Biaya Bergabung</h4>
                        <p>Informasi paket, skema pembayaran, dan ketentuan program.</p>
                    </div>
                </div>

                <div class="quick-help-item">
                    <div class="quick-help-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>

                    <div>
                        <h4>Simulasi Hasil</h4>
                        <p>Penjelasan simulasi potensi hasil dan catatan pentingnya.</p>
                    </div>
                </div>
            </div>

            <div class="quick-help-note">
                <i class="bi bi-info-circle"></i>
                <span>
                    Untuk respons lebih cepat, Anda juga dapat langsung menghubungi
                    BIOTRA melalui WhatsApp.
                </span>
            </div>
        </div>
    </div>
</section>