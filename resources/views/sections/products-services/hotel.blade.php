<section class="service-section service-section-gray">
    <div class="container service-container service-container-reverse">

        <div class="service-gallery">
            <div class="gallery-main">
                <img
                    src="{{ content_image('products_services', 'hotel', 'main_image', 'assets/img/products-services/hotel-main.jpg') }}"
                    alt="Hotel dan penginapan Jakarta PIK 2 dalam layanan BIOTRA"
                    loading="lazy"
                >

                <span class="gallery-badge">
                    {{ content_value('products_services', 'hotel', 'location_badge', 'Jakarta / PIK 2') }}
                </span>
            </div>

            <div class="gallery-thumbs">
                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'hotel', 'image_1', 'assets/img/products-services/hotel-1.jpg') }}"
                        alt="Kamar hotel dan penginapan BIOTRA"
                        loading="lazy"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'hotel', 'image_2', 'assets/img/products-services/hotel-2.jpg') }}"
                        alt="Fasilitas hotel dan penginapan BIOTRA"
                        loading="lazy"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'hotel', 'image_3', 'assets/img/products-services/hotel-3.jpg') }}"
                        alt="Area lobby hotel dan penginapan BIOTRA"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>

        <div class="service-content">
            <span class="service-label">
                {{ content_value('products_services', 'hotel', 'label', 'Hotel & Penginapan') }}
            </span>

            <h2>
                {{ content_value('products_services', 'hotel', 'title', 'Akomodasi Strategis untuk Perjalanan Bisnis dan Kebutuhan Menginap') }}
            </h2>

            <p class="service-description">
                {{ content_value('products_services', 'hotel', 'paragraph_1', 'Hotel & Penginapan Jakarta / PIK 2 hadir untuk menjawab kebutuhan akomodasi di area strategis, baik untuk perjalanan bisnis, wisata, maupun kebutuhan menginap jangka pendek. Kategori ini menjadi bagian dari ekosistem BIOTRA dalam sektor properti dan penginapan.') }}
            </p>

            <p class="service-description">
                {{ content_value('products_services', 'hotel', 'paragraph_2', 'Dengan lokasi yang mendukung mobilitas perkotaan, kategori hotel dan penginapan dapat menjadi pilihan bagi pasar yang membutuhkan tempat menginap praktis, nyaman, dan mudah dijangkau.') }}
            </p>

            <div class="service-benefits">
                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'hotel', 'benefit_1', 'Cocok untuk perjalanan bisnis dan wisata') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'hotel', 'benefit_2', 'Berada di area strategis Jakarta / PIK 2') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'hotel', 'benefit_3', 'Mendukung kebutuhan menginap jangka pendek') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'hotel', 'benefit_4', 'Terhubung dengan ekosistem akomodasi BIOTRA') }}</span>
                </div>
            </div>

            <a href="{{ content_value('products_services', 'hotel', 'button_link', route('contact')) }}" class="service-cta">
                {{ content_value('products_services', 'hotel', 'button_text', 'Konsultasi Produk Ini') }}
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>
