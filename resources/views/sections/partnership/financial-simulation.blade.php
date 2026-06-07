<section class="financial-simulation-section">
    <div class="container financial-simulation-container">
        <div class="simulation-header">
            <span class="partnership-section-label">
                {{ content_value('partnership', 'simulation', 'label', 'Simulasi Financial') }}
            </span>

            <h2>
                {{ content_value('partnership', 'simulation', 'title', 'Gambaran Potensi Hasil dari Program Kemitraan BIOTRA') }}
            </h2>

            <p>
                {{ content_value('partnership', 'simulation', 'description', 'Simulasi berikut digunakan untuk memberikan gambaran mengenai potensi hasil dari penyewaan unit properti dan rental kendaraan dalam program BIOTRA. Angka yang ditampilkan bersifat ilustrasi dan dapat berbeda sesuai okupansi, permintaan pasar, performa unit, serta ketentuan program.') }}
            </p>
        </div>

        <div class="simulation-grid">
            <div class="simulation-card">
                <div class="simulation-card-header">
                    <div class="simulation-icon">
                        <i class="bi bi-building-check"></i>
                    </div>
                    <div>
                        <span>Simulasi 01</span>
                        <h3>{{ content_value('partnership', 'simulation', 'property_title', 'Villa / Apartemen') }}</h3>
                    </div>
                </div>

                <div class="simulation-details">
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'property_rent_label', 'Harga sewa') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'property_rent_value', 'Rp1.000.000 / malam') }}</strong>
                    </div>
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'property_duration_label', 'Estimasi tersewa') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'property_duration_value', '10 malam / bulan') }}</strong>
                    </div>
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'property_total_label', 'Total transaksi') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'property_total_value', 'Rp10.000.000') }}</strong>
                    </div>
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'property_share_label', 'Hak sewa mitra') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'property_share_value', '60%') }}</strong>
                    </div>
                </div>

                <div class="simulation-result">
                    <span>{{ content_value('partnership', 'simulation', 'property_result_label', 'Potensi hasil') }}</span>
                    <strong>{{ content_value('partnership', 'simulation', 'property_result_value', 'Rp6.000.000') }}</strong>
                    <small>/ bulan</small>
                </div>
            </div>

            <div class="simulation-card">
                <div class="simulation-card-header">
                    <div class="simulation-icon">
                        <i class="bi bi-car-front"></i>
                    </div>
                    <div>
                        <span>Simulasi 02</span>
                        <h3>{{ content_value('partnership', 'simulation', 'rental_title', 'Rental Kendaraan') }}</h3>
                    </div>
                </div>

                <div class="simulation-details">
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'rental_price_label', 'Harga rental') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'rental_price_value', 'Rp450.000 / hari') }}</strong>
                    </div>
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'rental_duration_label', 'Estimasi tersewa') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'rental_duration_value', '20 hari / bulan') }}</strong>
                    </div>
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'rental_total_label', 'Total transaksi') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'rental_total_value', 'Rp9.000.000') }}</strong>
                    </div>
                    <div class="simulation-row">
                        <span>{{ content_value('partnership', 'simulation', 'rental_share_label', 'Hak sewa mitra') }}</span>
                        <strong>{{ content_value('partnership', 'simulation', 'rental_share_value', '60%') }}</strong>
                    </div>
                </div>

                <div class="simulation-result">
                    <span>{{ content_value('partnership', 'simulation', 'rental_result_label', 'Potensi hasil') }}</span>
                    <strong>{{ content_value('partnership', 'simulation', 'rental_result_value', 'Rp5.400.000') }}</strong>
                    <small>/ bulan</small>
                </div>
            </div>
        </div>

        <div class="simulation-highlight">
            <div class="simulation-highlight-content">
                <span>{{ content_value('partnership', 'simulation', 'highlight_label', 'Estimasi Potensi Gabungan') }}</span>

                <div class="sim-monthly-note">
                    <i class="bi bi-calendar3"></i>
                    {{ content_value('partnership', 'simulation', 'highlight_monthly', 'Rp11.400.000') }} <em>/ bulan</em>
                </div>

                <div class="sim-total-label">{{ content_value('partnership', 'simulation', 'highlight_period', 'Proyeksi dalam 60 Bulan') }}</div>

                <h3>{{ content_value('partnership', 'simulation', 'highlight_total', 'Rp684.000.000') }}</h3>

                <p>
                    {{ content_value('partnership', 'simulation', 'highlight_description', 'Potensi akumulatif ilustrasi dari program kemitraan BIOTRA. Angka bersifat ilustrasi dengan catatan mengikuti performa sewa, kondisi pasar, dan ketentuan program yang berlaku.') }}
                </p>
            </div>

            <div class="simulation-highlight-icon">
                <i class="bi bi-graph-up-arrow"></i>
            </div>
        </div>

        <div class="simulation-disclaimer">
            <i class="bi bi-info-circle"></i>
            <span>
                {{ content_value('partnership', 'simulation', 'disclaimer', 'Simulasi ini bersifat ilustrasi dan bukan jaminan hasil. Pendapatan dapat berbeda tergantung okupansi, permintaan pasar, performa unit, biaya operasional, kebijakan program, serta syarat dan ketentuan yang berlaku.') }}
            </span>
        </div>
    </div>
</section>
