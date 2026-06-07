
<section class="about-profile-section">
    <div class="about-profile-bg"></div>

    <div class="container about-profile-container">
        <div class="about-profile-header">
            <span class="section-label">
                {{ content_value('about', 'profile', 'label', 'Tentang BIOTRA') }}
            </span>

            <h1>
                {{ content_value('about', 'profile', 'title', 'Membuka Akses Bisnis Modern di Sektor Properti & Mobilitas') }}
            </h1>

            <div class="about-profile-text">
                <p>
                    {{ content_value('about', 'profile', 'paragraph_1', 'BIOTRA adalah program kemitraan modern yang bergerak di sektor properti, penginapan, apartemen, rental kendaraan, dan pariwisata. BIOTRA hadir untuk membantu masyarakat memiliki akses bisnis yang lebih praktis tanpa harus mengelola operasional secara langsung.') }}
                </p>

                <p>
                    {{ content_value('about', 'profile', 'paragraph_2', 'Melalui sistem yang terarah, BIOTRA menghubungkan peluang di sektor akomodasi dan mobilitas dengan kebutuhan pasar yang terus berjalan, mulai dari penginapan, staycation, perjalanan bisnis, wisata, hingga kebutuhan transportasi.') }}
                </p>
            </div>
        </div>

        <div class="about-profile-visual">
            <div class="about-profile-slider">
                <img
                    src="{{ content_image('about', 'profile', 'slide_1', 'assets/img/about-page/about-profile-1.jpg') }}"
                    alt="Profil BIOTRA program kemitraan properti dan mobilitas"
                    class="about-slide active"
                >

                <img
                    src="{{ content_image('about', 'profile', 'slide_2', 'assets/img/about-page/about-profile-2.jpg') }}"
                    alt="Meeting bisnis BIOTRA dalam program kemitraan modern"
                    class="about-slide"
                >

                <img
                    src="{{ content_image('about', 'profile', 'slide_3', 'assets/img/about-page/about-profile-3.jpg') }}"
                    alt="Properti dan mobilitas dalam ekosistem bisnis BIOTRA"
                    class="about-slide"
                >
            </div>

            <div class="about-sector-card">
                <span class="sector-card-label">
                    {{ content_value('about', 'profile', 'sector_label', 'Sektor BIOTRA') }}
                </span>

                <div class="sector-list">
                    <span>{{ content_value('about', 'profile', 'sector_1', 'Properti') }}</span>
                    <span>{{ content_value('about', 'profile', 'sector_2', 'Penginapan') }}</span>
                    <span>{{ content_value('about', 'profile', 'sector_3', 'Apartemen') }}</span>
                    <span>{{ content_value('about', 'profile', 'sector_4', 'Rental Kendaraan') }}</span>
                    <span>{{ content_value('about', 'profile', 'sector_5', 'Pariwisata') }}</span>
                    <span>{{ content_value('about', 'profile', 'sector_6', 'Mobilitas') }}</span>
                </div>
            </div>

            <div class="about-stat-card stat-card-left">
                <div class="stat-icon">
                    <i class="bi bi-building-check"></i>
                </div>
                <div>
                    <h4>{{ content_value('about', 'profile', 'stat_1_title', 'Properti') }}</h4>
                    <p>{{ content_value('about', 'profile', 'stat_1_description', 'Villa, penginapan, dan apartemen') }}</p>
                </div>
            </div>

            <div class="about-stat-card stat-card-right">
                <div class="stat-icon">
                    <i class="bi bi-car-front"></i>
                </div>
                <div>
                    <h4>{{ content_value('about', 'profile', 'stat_2_title', 'Mobilitas') }}</h4>
                    <p>{{ content_value('about', 'profile', 'stat_2_description', 'Rental kendaraan wisata dan bisnis') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
