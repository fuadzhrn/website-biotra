<section class="service-section service-section-light">
    <div class="container service-container">
        <div class="service-content">
            <span class="service-label">
                {{ content_value('products_services', 'apartment', 'label', 'Apartemen Harian & Mingguan') }}
            </span>

            <h2>
                {{ content_value('products_services', 'apartment', 'title', 'Hunian Fleksibel untuk Kebutuhan Bisnis, Kerja, dan Tinggal Sementara') }}
            </h2>

            <p class="service-description">
                {{ content_value('products_services', 'apartment', 'paragraph_1', 'Apartemen Harian & Mingguan BIOTRA ditujukan untuk kebutuhan hunian sementara yang lebih fleksibel, khususnya di area Bekasi dan Cikarang yang dekat dengan aktivitas bisnis, industri, dan mobilitas kerja.') }}
            </p>

            <p class="service-description">
                {{ content_value('products_services', 'apartment', 'paragraph_2', 'Kategori ini cocok untuk pasar yang membutuhkan tempat tinggal sementara, baik untuk pekerja, perjalanan bisnis, maupun kebutuhan menginap dalam jangka pendek hingga mingguan.') }}
            </p>

            <div class="service-benefits">
                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'apartment', 'benefit_1', 'Cocok untuk pekerja dan perjalanan bisnis') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'apartment', 'benefit_2', 'Mendukung kebutuhan tinggal harian atau mingguan') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'apartment', 'benefit_3', 'Berada di area Bekasi & Cikarang') }}</span>
                </div>

                <div class="service-benefit-item">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('products_services', 'apartment', 'benefit_4', 'Fleksibel untuk kebutuhan hunian sementara') }}</span>
                </div>
            </div>

            <a href="{{ content_value('products_services', 'apartment', 'button_link', route('contact')) }}" class="service-cta">
                {{ content_value('products_services', 'apartment', 'button_text', 'Konsultasi Produk Ini') }}
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="service-gallery">
            <div class="gallery-main">
                <img
                    src="{{ content_image('products_services', 'apartment', 'main_image', 'assets/img/products-services/apartment-main.jpg') }}"
                    alt="Apartemen harian dan mingguan Bekasi Cikarang dalam layanan BIOTRA"
                    loading="lazy"
                    class="ps-gallery-trigger" data-group="gallery-apartment" data-index="0"
                >

                <span class="gallery-badge">
                    {{ content_value('products_services', 'apartment', 'location_badge', 'Bekasi & Cikarang') }}
                </span>
            </div>

            <div class="gallery-thumbs">
                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'apartment', 'image_1', 'assets/img/products-services/apartment-1.jpg') }}"
                        alt="Kamar tidur apartemen BIOTRA"
                        loading="lazy"
                        class="ps-gallery-trigger" data-group="gallery-apartment" data-index="1"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'apartment', 'image_2', 'assets/img/products-services/apartment-2.jpg') }}"
                        alt="Ruang tamu atau dapur apartemen BIOTRA"
                        loading="lazy"
                        class="ps-gallery-trigger" data-group="gallery-apartment" data-index="2"
                    >
                </div>

                <div class="gallery-thumb">
                    <img
                        src="{{ content_image('products_services', 'apartment', 'image_3', 'assets/img/products-services/apartment-3.jpg') }}"
                        alt="Gedung atau fasilitas apartemen BIOTRA"
                        loading="lazy"
                        class="ps-gallery-trigger" data-group="gallery-apartment" data-index="3"
                    >
                </div>
            </div>
        </div>
    </div>
</section>
