<section class="partnership-pricing-section promo-pricing-section">
    <div class="pricing-pattern"></div>

    <div class="container partnership-pricing-container">
        <div class="pricing-header">
            <span class="partnership-section-label section-label-dark">
                Biaya Bergabung
            </span>

            <h2>
                Gabung Program Kemitraan BIOTRA<br>dengan Penawaran Spesial
            </h2>

            <p>
                BIOTRA menghadirkan penawaran kemitraan dengan skema biaya yang lebih ringan
                untuk calon mitra yang ingin bergabung dalam ekosistem properti, akomodasi,
                dan mobilitas. Informasi harga mengikuti kuota, periode, dan ketentuan
                program yang berlaku.
            </p>
        </div>

        <div class="promo-pricing-card">

            {{-- Panel Kiri: Harga --}}
            <div class="promo-price-panel">
                <span class="promo-badge">
                    <i class="bi bi-tag-fill"></i>
                    Promo Kemitraan BIOTRA
                </span>

                {{-- Harga Normal (dicoret) --}}
                <div class="normal-price-box">
                    <span class="price-label">Harga Normal</span>
                    <div class="normal-price-wrapper">
                        <strong>Rp96.000.000</strong>
                        <span class="price-cross">
                            <i class="bi bi-x-lg"></i>
                        </span>
                    </div>
                    <p>Harga normal program reguler</p>
                </div>

                {{-- Harga Diskon --}}
                <div class="discount-price-box">
                    <span class="price-label">Harga Diskon</span>
                    <strong>Rp36.000.000</strong>
                    <p>Penawaran khusus untuk calon mitra yang ingin bergabung lebih awal.</p>
                </div>

                {{-- Harga Special --}}
                <div class="special-price-box">
                    <span>Diskon Special</span>
                    <h3>Rp27.500.000</h3>
                    <p>
                        Isi form konsultasi untuk mendapatkan informasi harga spesial
                        Rp27.500.000 sesuai kuota dan ketentuan program BIOTRA.
                    </p>
                </div>
            </div>

            {{-- Panel Kanan: Benefit & CTA --}}
            <div class="promo-benefit-panel">
                <h3>Benefit Program</h3>

                <p>
                    Program kemitraan BIOTRA dirancang agar calon mitra dapat memahami
                    skema program dengan lebih praktis dan terarah.
                </p>

                <ul class="promo-benefit-list">
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>Hak pakai dan hak sewa sesuai ketentuan program</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>Operasional dibantu oleh BIOTRA</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>Benefit mengikuti skema kemitraan</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>Legalitas dan ketentuan program dapat dikonsultasikan</span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}#consultation-form" class="promo-main-button">
                    Gabung Sekarang
                    <i class="bi bi-arrow-right"></i>
                </a>

                <a href="{{ route('contact') }}#consultation-form" class="promo-secondary-link">
                    Konsultasi Program
                </a>
            </div>

        </div>

        <div class="pricing-note">
            <i class="bi bi-info-circle"></i>
            <span>
                Harga, promo, diskon, kuota, benefit, dan skema pembayaran dapat berubah
                sewaktu-waktu mengikuti kebijakan BIOTRA. Informasi final dapat dikonfirmasi
                melalui tim BIOTRA.
            </span>
        </div>
    </div>
</section>
