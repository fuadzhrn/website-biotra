<section class="partnership-pricing-section promo-pricing-section">
    <div class="pricing-pattern"></div>

    <div class="container partnership-pricing-container">
        <div class="pricing-header">
            <span class="partnership-section-label section-label-dark">
                {{ content_value('partnership', 'pricing', 'label', 'Biaya Bergabung') }}
            </span>

            <h2>
                {{ content_value('partnership', 'pricing', 'title', 'Gabung Program Kemitraan BIOTRA dengan Penawaran Spesial') }}
            </h2>

            <p>
                {{ content_value('partnership', 'pricing', 'description', 'BIOTRA menghadirkan penawaran kemitraan dengan skema biaya yang lebih ringan untuk calon mitra yang ingin bergabung dalam ekosistem properti, akomodasi, dan mobilitas. Informasi harga mengikuti kuota, periode, dan ketentuan program yang berlaku.') }}
            </p>
        </div>

        <div class="promo-pricing-card">

            {{-- Panel Kiri: Harga --}}
            <div class="promo-price-panel">
                <span class="promo-badge">
                    <i class="bi bi-tag-fill"></i>
                    {{ content_value('partnership', 'pricing', 'promo_badge', 'Promo Kemitraan BIOTRA') }}
                </span>

                {{-- Harga Normal (dicoret) --}}
                <div class="normal-price-box">
                    <span class="price-label">{{ content_value('partnership', 'pricing', 'normal_price_label', 'Harga Normal') }}</span>
                    <div class="normal-price-wrapper">
                        <strong>{{ content_value('partnership', 'pricing', 'normal_price', 'Rp96.000.000') }}</strong>
                        <span class="price-cross">
                            <i class="bi bi-x-lg"></i>
                        </span>
                    </div>
                    <p>{{ content_value('partnership', 'pricing', 'normal_price_note', 'Harga normal program reguler') }}</p>
                </div>

                {{-- Harga Diskon --}}
                <div class="discount-price-box">
                    <span class="price-label">{{ content_value('partnership', 'pricing', 'discount_price_label', 'Harga Diskon') }}</span>
                    <strong>{{ content_value('partnership', 'pricing', 'discount_price', 'Rp36.000.000') }}</strong>
                    <p>{{ content_value('partnership', 'pricing', 'discount_price_note', 'Penawaran khusus untuk calon mitra yang ingin bergabung lebih awal.') }}</p>
                </div>

                {{-- Harga Special --}}
                <div class="special-price-box">
                    <span>{{ content_value('partnership', 'pricing', 'special_label', 'Diskon Special') }}</span>
                    <h3>{{ content_value('partnership', 'pricing', 'special_price', 'Rp27.500.000') }}</h3>
                    <p>
                        {{ content_value('partnership', 'pricing', 'special_description', 'Isi form konsultasi untuk mendapatkan informasi harga spesial Rp27.500.000 sesuai kuota dan ketentuan program BIOTRA.') }}
                    </p>
                </div>
            </div>

            {{-- Panel Kanan: Benefit & CTA --}}
            <div class="promo-benefit-panel">
                <h3>{{ content_value('partnership', 'pricing', 'benefit_title', 'Benefit Program') }}</h3>

                <p>
                    {{ content_value('partnership', 'pricing', 'benefit_description', 'Program kemitraan BIOTRA dirancang agar calon mitra dapat memahami skema program dengan lebih praktis dan terarah.') }}
                </p>

                <ul class="promo-benefit-list">
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>{{ content_value('partnership', 'pricing', 'benefit_1', 'Hak pakai dan hak sewa sesuai ketentuan program') }}</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>{{ content_value('partnership', 'pricing', 'benefit_2', 'Operasional dibantu oleh BIOTRA') }}</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>{{ content_value('partnership', 'pricing', 'benefit_3', 'Benefit mengikuti skema kemitraan') }}</span>
                    </li>
                    <li>
                        <i class="bi bi-check2-circle"></i>
                        <span>{{ content_value('partnership', 'pricing', 'benefit_4', 'Legalitas dan ketentuan program dapat dikonsultasikan') }}</span>
                    </li>
                </ul>

                <a href="{{ content_value('partnership', 'pricing', 'main_button_link', route('contact') . '#consultation-form') }}" class="promo-main-button">
                    {{ content_value('partnership', 'pricing', 'main_button_text', 'Gabung Sekarang') }}
                    <i class="bi bi-arrow-right"></i>
                </a>

                <a href="{{ content_value('partnership', 'pricing', 'secondary_button_link', route('contact') . '#consultation-form') }}" class="promo-secondary-link">
                    {{ content_value('partnership', 'pricing', 'secondary_button_text', 'Konsultasi Program') }}
                </a>
            </div>

        </div>

        <div class="pricing-note">
            <i class="bi bi-info-circle"></i>
            <span>
                {{ content_value('partnership', 'pricing', 'note', 'Harga, promo, diskon, kuota, benefit, dan skema pembayaran dapat berubah sewaktu-waktu mengikuti kebijakan BIOTRA. Informasi final dapat dikonfirmasi melalui tim BIOTRA.') }}
            </span>
        </div>
    </div>
</section>
