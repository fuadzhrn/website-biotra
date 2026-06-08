@php
    $activeSlugs = isset($productCategories)
        ? $productCategories->pluck('slug')
        : collect(['villa-staycation', 'hotel-penginapan', 'apartemen', 'rental-kendaraan']);
@endphp

<section class="operational-area-section">
    <div class="container operational-area-container">
        <div class="area-header">
            <span class="section-label">
                {{ content_value('about', 'operational_area', 'label', 'Area Bisnis') }}
            </span>

            <h2>
                {{ content_value('about', 'operational_area', 'title', 'Area Operasional dan Produk Utama BIOTRA') }}
            </h2>

            <p>
                {{ content_value('about', 'operational_area', 'description', 'BIOTRA mengembangkan peluang kemitraan di beberapa area bisnis yang berkaitan dengan kebutuhan akomodasi, pariwisata, perjalanan bisnis, dan mobilitas.') }}
            </p>
        </div>

        <div class="area-showcase-grid">
            @if($activeSlugs->contains('villa-staycation'))
            <a class="area-panel"
               href="https://www.google.com/maps/search/Bali,+Indonesia"
               target="_blank" rel="noopener noreferrer">
                <img class="area-panel-photo"
                     src="{{ content_image('about', 'operational_area', 'area_1_image', 'assets/img/about-page/area-bali.jpg') }}"
                     alt="Area operasional BIOTRA Bali villa dan staycation">
                <img class="area-panel-map"
                     src="{{ asset('assets/img/about-page/maps/map-bali.jpg') }}"
                     alt="Peta Bali" loading="lazy"
                     onerror="this.style.display='none'">
                <div class="area-map-hint">
                    <i class="bi bi-map-fill"></i> Buka Maps
                </div>
                <div class="area-panel-overlay"></div>
                <div class="area-panel-content">
                    <span class="area-location">
                        {{ content_value('about', 'operational_area', 'area_1_location', 'Bali') }}
                    </span>
                    <h3>{{ content_value('about', 'operational_area', 'area_1_title', 'Villa & Staycation') }}</h3>
                    <p>
                        {{ content_value('about', 'operational_area', 'area_1_description', 'Peluang bisnis penginapan wisata untuk kebutuhan liburan, staycation, dan akomodasi pariwisata.') }}
                    </p>
                </div>
            </a>
            @endif

            @if($activeSlugs->contains('hotel-penginapan'))
            <a class="area-panel"
               href="https://www.google.com/maps/search/PIK+2+Jakarta+Utara"
               target="_blank" rel="noopener noreferrer">
                <img class="area-panel-photo"
                     src="{{ content_image('about', 'operational_area', 'area_2_image', 'assets/img/about-page/area-jakarta.jpg') }}"
                     alt="Area operasional BIOTRA Jakarta PIK 2 hotel dan penginapan">
                <img class="area-panel-map"
                     src="{{ asset('assets/img/about-page/maps/map-jakarta.jpg') }}"
                     alt="Peta Jakarta PIK 2" loading="lazy"
                     onerror="this.style.display='none'">
                <div class="area-map-hint">
                    <i class="bi bi-map-fill"></i> Buka Maps
                </div>
                <div class="area-panel-overlay"></div>
                <div class="area-panel-content">
                    <span class="area-location">
                        {{ content_value('about', 'operational_area', 'area_2_location', 'Jakarta / PIK 2') }}
                    </span>
                    <h3>{{ content_value('about', 'operational_area', 'area_2_title', 'Hotel & Penginapan') }}</h3>
                    <p>
                        {{ content_value('about', 'operational_area', 'area_2_description', 'Akomodasi untuk kebutuhan perjalanan bisnis, wisata, dan menginap jangka pendek di area strategis.') }}
                    </p>
                </div>
            </a>
            @endif

            @if($activeSlugs->contains('apartemen'))
            <a class="area-panel"
               href="https://www.google.com/maps/search/Bekasi+Jawa+Barat"
               target="_blank" rel="noopener noreferrer">
                <img class="area-panel-photo"
                     src="{{ content_image('about', 'operational_area', 'area_3_image', 'assets/img/about-page/area-bekasi.jpg') }}"
                     alt="Area operasional BIOTRA Bekasi Cikarang apartemen harian dan mingguan">
                <img class="area-panel-map"
                     src="{{ asset('assets/img/about-page/maps/map-bekasi.jpg') }}"
                     alt="Peta Bekasi & Cikarang" loading="lazy"
                     onerror="this.style.display='none'">
                <div class="area-map-hint">
                    <i class="bi bi-map-fill"></i> Buka Maps
                </div>
                <div class="area-panel-overlay"></div>
                <div class="area-panel-content">
                    <span class="area-location">
                        {{ content_value('about', 'operational_area', 'area_3_location', 'Bekasi & Cikarang') }}
                    </span>
                    <h3>{{ content_value('about', 'operational_area', 'area_3_title', 'Apartemen Harian & Mingguan') }}</h3>
                    <p>
                        {{ content_value('about', 'operational_area', 'area_3_description', 'Pilihan hunian sementara untuk pekerja, perjalanan bisnis, maupun kebutuhan tinggal fleksibel.') }}
                    </p>
                </div>
            </a>
            @endif

            @if($activeSlugs->contains('rental-kendaraan'))
            <a class="area-panel"
               href="https://www.google.com/maps/search/Jakarta+Indonesia"
               target="_blank" rel="noopener noreferrer">
                <img class="area-panel-photo"
                     src="{{ content_image('about', 'operational_area', 'area_4_image', 'assets/img/about-page/area-mobility.jpg') }}"
                     alt="Area operasional BIOTRA mobility rental kendaraan wisata dan bisnis">
                <img class="area-panel-map"
                     src="{{ asset('assets/img/about-page/maps/map-mobility.jpg') }}"
                     alt="Peta Area Operasional Mobil Rental" loading="lazy"
                     onerror="this.style.display='none'">
                <div class="area-map-hint">
                    <i class="bi bi-map-fill"></i> Buka Maps
                </div>
                <div class="area-panel-overlay"></div>
                <div class="area-panel-content">
                    <span class="area-location">
                        {{ content_value('about', 'operational_area', 'area_4_location', 'Mobil Rental') }}
                    </span>
                    <h3>{{ content_value('about', 'operational_area', 'area_4_title', 'Rental Kendaraan Wisata & Bisnis') }}</h3>
                    <p>
                        {{ content_value('about', 'operational_area', 'area_4_description', 'Layanan mobilitas untuk kebutuhan perjalanan wisata, bisnis, dan transportasi harian.') }}
                    </p>
                </div>
            </a>
            @endif
        </div>
    </div>
</section>
