<section class="unit-gallery-section">
    <div class="container">

        <div class="unit-gallery-section-header">
            <span class="section-label">Gallery Unit</span>
            <h2>Foto Detail Setiap Unit</h2>
            <p>Dokumentasi visual setiap unit dalam kategori ini untuk membantu Anda mengenal lebih jauh pilihan yang tersedia.</p>
        </div>

        @foreach($units as $unit)
        @php
            $slug        = Str::slug($unit['name']);
            $thumbCount  = count($unit['images']);
            $visibleThumbs = array_slice($unit['images'], 0, 3);
            $hiddenCount = max(0, $thumbCount - 3);
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

            <div class="unit-gallery-grid {{ $thumbCount === 0 ? 'no-thumbs' : '' }}">

                {{-- Main image --}}
                <div class="unit-gallery-main">
                    <img src="{{ asset($unit['main_image']) }}"
                         alt="{{ $unit['name'] }}"
                         class="gallery-trigger"
                         data-group="gallery-{{ $slug }}"
                         data-index="0">
                    <div class="unit-gallery-main-badge">{{ $unit['name'] }}</div>
                </div>

                {{-- Thumbnails: hanya tampil jika ada gambar --}}
                @if($thumbCount > 0)
                <div class="unit-gallery-thumbs">
                    @foreach($visibleThumbs as $i => $img)
                    @php $isLast = ($hiddenCount > 0 && $i === 2); @endphp
                    <div class="unit-gallery-thumb">
                        <img src="{{ asset($img) }}"
                             alt="{{ $unit['name'] }}"
                             loading="lazy"
                             class="gallery-trigger"
                             data-group="gallery-{{ $slug }}"
                             data-index="{{ $i + 1 }}">
                        @if($isLast)
                        <div class="thumb-more-overlay">
                            <span>+{{ $hiddenCount }}</span>
                            <small>foto lagi</small>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endif

            </div>

        </div>
        @endforeach

    </div>
</section>
