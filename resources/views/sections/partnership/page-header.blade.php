<section class="partnership-page-header">
    <div class="partnership-header-pattern"></div>

    <div class="container partnership-page-header-container">
        <div class="partnership-breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <i class="bi bi-chevron-right"></i>
            <span>Kemitraan</span>
        </div>

        <div class="partnership-page-header-content">
            <span class="partnership-header-label">
                {{ content_value('partnership', 'page_header', 'label', 'Kemitraan BIOTRA') }}
            </span>

            <h1>
                {{ content_value('partnership', 'page_header', 'title', 'Mulai Akses Bisnis Properti dan Mobil Rental dengan Sistem yang Lebih Praktis') }}
            </h1>

            <p>
                {{ content_value('partnership', 'page_header', 'description', 'Program Kemitraan BIOTRA dirancang untuk membantu mitra memiliki akses bisnis di sektor properti, akomodasi, pariwisata, dan rental kendaraan tanpa harus mengelola seluruh operasional secara mandiri.') }}
            </p>

            <div class="partnership-header-note">
                <i class="bi bi-info-circle"></i>
                <span>
                    {{ content_value('partnership', 'page_header', 'note', 'Informasi program, benefit, biaya, dan simulasi mengikuti syarat serta ketentuan yang berlaku.') }}
                </span>
            </div>
        </div>
    </div>
</section>
