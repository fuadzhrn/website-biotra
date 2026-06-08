@php
    $imageMap = [
        'villa-staycation' => 'assets/img/products/villa.jpg',
        'hotel-penginapan' => 'assets/img/products/hotel.jpg',
        'apartemen'        => 'assets/img/products/apartment.jpg',
        'rental-kendaraan' => 'assets/img/products/rental-car.jpg',
    ];
    $iconMap = [
        'villa-staycation' => 'bi-house-heart',
        'hotel-penginapan' => 'bi-building',
        'apartemen'        => 'bi-buildings',
        'rental-kendaraan' => 'bi-car-front',
    ];
@endphp

<section class="products-section">
    <div class="container">
        <div class="section-header products-header">
            <span class="section-label">
                {{ content_value('home', 'products', 'label', 'Produk BIOTRA') }}
            </span>

            <h2>
                {{ content_value('home', 'products', 'title', 'Produk Utama & Area Bisnis BIOTRA') }}
            </h2>

            <p>
                {{ content_value('home', 'products', 'description', 'BIOTRA menghadirkan beberapa sektor bisnis yang berkaitan dengan kebutuhan akomodasi, pariwisata, perjalanan bisnis, dan mobilitas.') }}
            </p>
        </div>

        <div class="products-grid">
            @if(isset($productCategories) && $productCategories->isNotEmpty())
                @foreach($productCategories as $cat)
                @php
                    $img  = $imageMap[$cat->slug] ?? 'assets/img/products/villa.jpg';
                    $icon = $iconMap[$cat->slug]  ?? 'bi-grid';
                @endphp
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset($img) }}" alt="{{ $cat->name }}">
                        <span class="product-location">{{ $cat->badge }}</span>
                    </div>

                    <div class="product-content">
                        <div class="product-icon">
                            <i class="bi {{ $icon }}"></i>
                        </div>

                        <h3>{{ $cat->name }}</h3>

                        <p>{{ $cat->subtitle }}</p>

                        <a href="{{ route('product-details.show', $cat->slug) }}" class="product-link">
                            Lihat Detail
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            @else
                {{-- Fallback static jika DB belum ter-seed --}}
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/img/products/villa.jpg') }}" alt="Villa & Staycation Bali">
                        <span class="product-location">Bali</span>
                    </div>
                    <div class="product-content">
                        <div class="product-icon"><i class="bi bi-house-heart"></i></div>
                        <h3>Villa & Staycation Bali</h3>
                        <p>Akses bisnis penginapan wisata untuk kebutuhan liburan dan staycation.</p>
                        <a href="{{ route('product-details.show', 'villa-staycation') }}" class="product-link">
                            Lihat Detail <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/img/products/hotel.jpg') }}" alt="Hotel & Penginapan Jakarta PIK 2">
                        <span class="product-location">Jakarta / PIK 2</span>
                    </div>
                    <div class="product-content">
                        <div class="product-icon"><i class="bi bi-building"></i></div>
                        <h3>Hotel & Penginapan</h3>
                        <p>Akomodasi untuk perjalanan bisnis, wisata, dan kebutuhan menginap jangka pendek.</p>
                        <a href="{{ route('product-details.show', 'hotel-penginapan') }}" class="product-link">
                            Lihat Detail <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/img/products/apartment.jpg') }}" alt="Apartemen Harian dan Mingguan">
                        <span class="product-location">Bekasi & Cikarang</span>
                    </div>
                    <div class="product-content">
                        <div class="product-icon"><i class="bi bi-buildings"></i></div>
                        <h3>Apartemen Harian & Mingguan</h3>
                        <p>Pilihan hunian sementara untuk pekerja, bisnis, maupun kebutuhan fleksibel.</p>
                        <a href="{{ route('product-details.show', 'apartemen') }}" class="product-link">
                            Lihat Detail <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/img/products/rental-car.jpg') }}" alt="Rental Kendaraan Wisata dan Bisnis">
                        <span class="product-location">Mobil Rental</span>
                    </div>
                    <div class="product-content">
                        <div class="product-icon"><i class="bi bi-car-front"></i></div>
                        <h3>Rental Kendaraan Wisata & Bisnis</h3>
                        <p>Layanan mobilitas untuk perjalanan wisata, kebutuhan bisnis, dan transportasi harian.</p>
                        <a href="{{ route('product-details.show', 'rental-kendaraan') }}" class="product-link">
                            Lihat Detail <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
