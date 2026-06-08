<section class="advantages-section">
    <div class="advantages-pattern"></div>

    <div class="container advantages-container">
        <div class="advantages-header">
            <span class="section-label section-label-dark">
                {{ content_value('home', 'advantages', 'label', 'Keunggulan BIOTRA') }}
            </span>

            <h2>
                {{ content_value('home', 'advantages', 'title', 'Dirancang untuk Mitra yang Ingin Punya Bisnis Tanpa Ribet') }}
            </h2>

            <p>
                {{ content_value('home', 'advantages', 'description', 'Program BIOTRA membantu mitra memiliki akses bisnis tanpa harus repot mengurus operasional harian.') }}
            </p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="bi bi-key"></i>
                </div>
                <h3>Hak Pakai Gratis Unit</h3>
                <p>
                    Mitra mendapatkan akses hak pakai gratis unit sesuai ketentuan
                    program yang berlaku.
                </p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <h3>Hak Sewa Unit</h3>
                <p>
                    Unit dapat disewakan dengan sistem pembagian hasil sesuai
                    skema kemitraan.
                </p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="bi bi-gear-wide-connected"></i>
                </div>
                <h3>Operasional Dikelola BIOTRA</h3>
                <p>
                    Pengelolaan operasional dibantu oleh BIOTRA agar mitra
                    tidak perlu menangani semuanya sendiri.
                </p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="bi bi-tools"></i>
                </div>
                <h3>Tanpa Repot Maintenance</h3>
                <p>
                    Perawatan unit dan kebutuhan maintenance dikelola secara
                    lebih praktis dan terarah.
                </p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="bi bi-calendar-check"></i>
                </div>
                <h3>Sistem Reservasi Profesional</h3>
                <p>
                    Booking, customer service, dan kebutuhan reservasi dikelola
                    dengan sistem yang lebih rapi.
                </p>
            </div>

            <div class="advantage-card">
                <div class="advantage-icon">
                    <i class="bi bi-arrow-left-right"></i>
                </div>
                <h3>Fleksibel Digunakan atau Disewakan</h3>
                <p>
                    Unit dapat dimanfaatkan untuk kebutuhan pribadi maupun
                    disewakan sesuai program BIOTRA.
                </p>
            </div>
        </div>

        <div class="advantages-cta">
            <p>
                Benefit program mengikuti syarat dan ketentuan yang berlaku.
            </p>

            <a href="{{ route('contact') }}" class="btn-primary">
                Konsultasi Program Kemitraan
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
