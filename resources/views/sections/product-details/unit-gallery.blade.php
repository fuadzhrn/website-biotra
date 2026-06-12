<section class="unit-gallery-section">
    <div class="container">

        <div class="unit-gallery-section-header">
            <span class="section-label">Gallery Unit</span>
            <h2>Foto Detail Setiap Unit</h2>
            <p>Dokumentasi visual setiap unit dalam kategori ini untuk membantu Anda mengenal lebih jauh pilihan yang tersedia.</p>
        </div>

        @foreach($units as $unit)
        @php
            $slug         = Str::slug($unit['name']);
            $allImages    = array_merge([$unit['main_image']], $unit['images']);
            $total        = count($allImages);
            $allImageUrls = array_map(fn($img) => asset($img), $allImages);
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

            {{-- Featured image --}}
            <div class="unit-gallery-featured"
                 data-slug="{{ $slug }}"
                 data-images="{{ e(json_encode(array_values($allImageUrls))) }}">
                <img src="{{ asset($unit['main_image']) }}"
                     alt="{{ $unit['name'] }}"
                     class="featured-main-img"
                     id="featured-{{ $slug }}"
                     data-current-index="0">
                <div class="unit-gallery-main-badge">{{ $unit['name'] }}</div>
                @if($total > 1)
                <button class="gallery-view-all-btn" data-slug="{{ $slug }}" type="button">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                    Lihat semua {{ $total }} foto
                </button>
                @endif
            </div>

            {{-- Thumbnail strip: hanya tampil jika ada gambar tambahan --}}
            @if($total > 1)
            <div class="unit-gallery-strip" data-slug="{{ $slug }}">
                @foreach($allImages as $i => $img)
                <div class="strip-item {{ $i === 0 ? 'active' : '' }}"
                     data-slug="{{ $slug }}"
                     data-src="{{ asset($img) }}"
                     data-index="{{ $i }}">
                    <img src="{{ asset($img) }}"
                         alt="{{ $unit['name'] }} foto {{ $i + 1 }}"
                         loading="{{ $i === 0 ? 'eager' : 'lazy' }}">
                </div>
                @endforeach
            </div>
            @endif

        </div>
        @endforeach

    </div>
</section>
