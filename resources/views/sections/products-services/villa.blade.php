<section class="service-section service-section-light">
    <div class="container service-container">
        <div class="service-content">
            <span class="service-label">
                {{ content_value('products_services', 'villa', 'label', 'Villa & Staycation') }}
            </span>

            <h2>
                {{ content_value('products_services', 'villa', 'title', 'Peluang Akomodasi Wisata di Bali dengan Konsep yang Lebih Praktis') }}
            </h2>

            <p class="service-description">
                {{ content_value('products_services', 'villa', 'paragraph_1', 'Villa & Staycation Bali menjadi salah satu kategori utama BIOTRA yang berfokus pada kebutuhan penginapan wisata, liburan, dan staycation. Kategori ini dirancang untuk menghadirkan akses bisnis di sektor pariwisata dengan sistem kemitraan yang lebih praktis dan terkelola.') }}
            </p>

            <p class="service-description">
                {{ content_value('products_services', 'villa', 'paragraph_2', 'Dengan tingginya kebutuhan akomodasi wisata, villa dan staycation menjadi salah satu sektor yang potensial untuk digunakan maupun disewakan sesuai ketentuan program BIOTRA.') }}
            </p>

            <div class="service-benefits">
                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'villa', 'benefit_1', 'Cocok untuk kebutuhan liburan dan staycation') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'villa', 'benefit_2', 'Berada dalam sektor pariwisata dan akomodasi') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'villa', 'benefit_3', 'Dapat digunakan atau disewakan sesuai program') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'villa', 'benefit_4', 'Operasional dibantu oleh sistem BIOTRA') }}</span>
                </div>
            </div>

            <a href="{{ content_value('products_services', 'villa', 'button_link', route('contact')) }}" class="service-cta">
                {{ content_value('products_services', 'villa', 'button_text', 'Konsultasi Produk Ini') }}
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="service-gallery">
            <div class="gallery-main">
                <img
                    src="{{ content_image('products_services', 'villa', 'main_image', 'assets/img/products-services/villa-main.jpg') }}"
                    alt="Villa dan staycation Bali dalam layanan BIOTRA"
                >

                <span class="gallery-badge">
                    {{ content_value('products_services', 'villa', 'location_badge', 'Bali') }}
                </span>
            </div>

            <div class="gallery-thumbs">
                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'villa', 'image_1', 'assets/img/products-services/villa-1.jpg') }}"
                        alt="Interior villa BIOTRA Bali"
                        loading="lazy"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'villa', 'image_2', 'assets/img/products-services/villa-2.jpg') }}"
                        alt="Fasilitas kolam renang villa BIOTRA Bali"
                        loading="lazy"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'villa', 'image_3', 'assets/img/products-services/villa-3.jpg') }}"
                        alt="View dan fasilitas pendukung villa BIOTRA Bali"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </div>
</section>
