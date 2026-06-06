<section class="unit-list-section">
    <div class="container">

        <div class="unit-list-header">
            <span class="section-label">Daftar Unit</span>
            <h2>Unit dalam Kategori Ini</h2>
            <p>Setiap unit memiliki gallery foto tersendiri. Klik "Lihat Gallery" untuk melihat foto detail masing-masing unit.</p>
        </div>

        <div class="unit-grid">
            @foreach($units as $unit)
            @php
                $slug = Str::slug($unit['name']);
            @endphp
            <div class="unit-card">

                <div class="unit-image">
                    <img src="{{ asset($unit['main_image']) }}" alt="{{ $unit['name'] }}" loading="lazy">
                    <div class="unit-image-badge">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{ $unit['location'] }}
                    </div>
                    <div class="unit-image-type">{{ $unit['type'] }}</div>
                </div>

                <div class="unit-content">
                    <h3 class="unit-name">{{ $unit['name'] }}</h3>
                    <div class="unit-location">
                        <i class="bi bi-geo-alt"></i>
                        {{ $unit['location'] }}
                    </div>
                    <p class="unit-description">{{ $unit['description'] }}</p>

                    <div class="unit-features">
                        @foreach($unit['features'] as $feature)
                        <span class="unit-feature-chip">
                            <i class="bi bi-check2"></i>
                            {{ $feature }}
                        </span>
                        @endforeach
                    </div>

                    <div class="unit-actions">
                        <a href="#gallery-{{ $slug }}" class="unit-btn-gallery unit-gallery-link">
                            <i class="bi bi-images"></i>
                            Lihat Gallery
                        </a>
                        <a href="{{ route('contact') }}" class="unit-btn-consult">
                            <i class="bi bi-chat-dots"></i>
                            Konsultasi
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>
