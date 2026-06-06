<section class="product-detail-page-header">
    <div class="product-detail-header-deco-grid"></div>
    <div class="product-detail-header-deco-radial"></div>
    <div class="product-detail-header-deco-radial-2"></div>

    <div class="container product-detail-header-inner">

        {{-- Breadcrumb --}}
        <div class="product-detail-breadcrumb">
            <a href="{{ route('home') }}">Beranda</a>
            <span class="bc-sep"><i class="bi bi-chevron-right"></i></span>
            <a href="{{ route('products-services') }}">Produk &amp; Layanan</a>
            <span class="bc-sep"><i class="bi bi-chevron-right"></i></span>
            <span class="bc-current">{{ $category['breadcrumb'] }}</span>
        </div>

        {{-- Label --}}
        <div class="product-detail-header-label">
            <i class="bi bi-grid-3x3-gap-fill"></i>
            {{ $category['label'] }}
        </div>

        {{-- Heading --}}
        <h1 class="product-detail-header-heading">{{ $category['title'] }}</h1>

        {{-- Subtitle --}}
        <p class="product-detail-header-subtitle">{{ $category['subtitle'] }}</p>

        {{-- Note --}}
        <div class="product-detail-header-note">
            <i class="bi bi-info-circle"></i>
            Gallery foto ditampilkan sebagai dokumentasi atau representasi unit sesuai kategori layanan BIOTRA.
        </div>

    </div>
</section>
