<section class="service-section service-section-gray">
    <div class="container service-container service-container-reverse">

        <div class="service-gallery">
            <div class="gallery-main">
                <img
                    src="{{ content_image('products_services', 'rental', 'main_image', 'assets/img/products-services/rental-main.jpg') }}"
                    alt="Rental kendaraan wisata dan bisnis dalam layanan BIOTRA"
                    loading="lazy"
                >

                <span class="gallery-badge">
                    {{ content_value('products_services', 'rental', 'location_badge', 'Mobility') }}
                </span>
            </div>

            <div class="gallery-thumbs">
                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'rental', 'image_1', 'assets/img/products-services/rental-1.jpg') }}"
                        alt="Interior kendaraan rental BIOTRA"
                        loading="lazy"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'rental', 'image_2', 'assets/img/products-services/rental-2.jpg') }}"
                        alt="Kendaraan untuk perjalanan wisata dan bisnis BIOTRA"
                        loading="lazy"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'rental', 'image_3', 'assets/img/products-services/rental-3.jpg') }}"
                        alt="Dokumentasi unit rental kendaraan BIOTRA"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>

        <div class="service-content">
            <span class="service-label">
                {{ content_value('products_services', 'rental', 'label', 'Rental Kendaraan') }}
            </span>

            <h2>
                {{ content_value('products_services', 'rental', 'title', 'Solusi Mobilitas untuk Perjalanan Wisata, Bisnis, dan Transportasi Harian') }}
            </h2>

            <p class="service-description">
                {{ content_value('products_services', 'rental', 'paragraph_1', 'Rental Kendaraan Wisata & Bisnis menjadi bagian dari ekosistem mobilitas BIOTRA yang mendukung kebutuhan perjalanan wisata, bisnis, dan transportasi harian. Kategori ini melengkapi sektor properti dan akomodasi agar program BIOTRA memiliki cakupan layanan yang lebih luas.') }}
            </p>

            <p class="service-description">
                {{ content_value('products_services', 'rental', 'paragraph_2', 'Dengan adanya layanan mobilitas, BIOTRA tidak hanya berfokus pada tempat menginap, tetapi juga mendukung kebutuhan perjalanan dan transportasi yang terus berjalan.') }}
            </p>

            <div class="service-benefits">
                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'rental', 'benefit_1', 'Cocok untuk perjalanan wisata dan bisnis') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'rental', 'benefit_2', 'Mendukung kebutuhan mobilitas harian') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'rental', 'benefit_3', 'Dapat terhubung dengan layanan penginapan') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'rental', 'benefit_4', 'Operasional kendaraan dapat dibantu sesuai program') }}</span>
                </div>
            </div>

            <a href="{{ content_value('products_services', 'rental', 'button_link', route('contact')) }}" class="service-cta">
                {{ content_value('products_services', 'rental', 'button_text', 'Konsultasi Produk Ini') }}
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>
