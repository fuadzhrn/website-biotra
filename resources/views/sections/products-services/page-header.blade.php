<section class="products-page-header">
    <div class="products-header-pattern"></div>

    <div class="container products-page-header-container">
        <div class="products-breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <i class="bi bi-chevron-right"></i>
            <span>Produk & Layanan</span>
        </div>

        <div class="products-page-header-content">
            <span class="products-header-label">
                {{ content_value('products_services', 'page_header', 'label', 'Produk & Layanan BIOTRA') }}
            </span>

            <h1>
                {{ content_value('products_services', 'page_header', 'title', 'Akses Bisnis Properti, Akomodasi, dan Mobilitas dalam Satu Ekosistem') }}
            </h1>

            <p>
                {{ content_value('products_services', 'page_header', 'description', 'BIOTRA menghadirkan beberapa kategori produk dan layanan yang berkaitan dengan kebutuhan penginapan, staycation, perjalanan bisnis, pariwisata, dan transportasi. Setiap kategori dirancang untuk mendukung program kemitraan BIOTRA dengan sistem yang lebih praktis, terkelola, dan mudah dipahami oleh calon mitra.') }}
            </p>

            <div class="products-header-note">
                <i class="bi bi-info-circle"></i>
                <span>
                    {{ content_value('products_services', 'page_header', 'note', 'Gambar yang ditampilkan merupakan dokumentasi atau representasi unit sesuai kategori layanan BIOTRA.') }}
                </span>
            </div>
        </div>
    </div>
</section>
