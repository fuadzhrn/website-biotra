<section class="unit-gallery-section">
    <div class="container">

        <div class="unit-gallery-section-header">
            <span class="section-label">Gallery Unit</span>
            <h2>Foto Detail Setiap Unit</h2>
            <p>Dokumentasi visual setiap unit dalam kategori ini untuk membantu Anda mengenal lebih jauh pilihan yang tersedia.</p>
        </div>

        @foreach($units as $unit)
        @php
            $slug = Str::slug($unit['name']);
        @endphp
        <div class="unit-gallery-block" id="gallery-{{ $slug }}">

            <div class="unit-gallery-block-header">
                <div>
                    <h3 class="unit-gallery-block-title">{{ $unit['name'] }}</h3>
                    <div class="unit-gallery-block-location">
                        <i class="bi bi-geo-alt-fill"></i>
                        {{ $unit['location'] }}
                    </div>
                    <p class="unit-gallery-block-desc">{{ $unit['description'] }}</p>
                </div>
                <a href="{{ route('contact') }}" class="unit-btn-consult" style="flex-shrink:0; align-self:flex-start;">
                    <i class="bi bi-chat-dots"></i>
                    Konsultasi Unit
                </a>
            </div>

            <div class="unit-gallery-grid">

                {{-- Main image --}}
                <div class="unit-gallery-main">
                    <img src="{{ asset($unit['main_image']) }}" alt="{{ $unit['name'] }}">
                    <div class="unit-gallery-main-badge">{{ $unit['name'] }}</div>
                </div>

                {{-- Thumbnails --}}
                <div class="unit-gallery-thumbs">
                    @foreach($unit['images'] as $img)
                    <div class="unit-gallery-thumb">
                        <img src="{{ asset($img) }}" alt="{{ $unit['name'] }}" loading="lazy">
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
        @endforeach

    </div>
</section>
