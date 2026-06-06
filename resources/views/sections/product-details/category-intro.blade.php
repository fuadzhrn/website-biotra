<section class="category-intro-section">
    <div class="container category-intro-container">

        {{-- LEFT: Text content --}}
        <div class="category-intro-left">
            <div class="category-intro-label">
                <i class="bi bi-layers"></i>
                Detail Kategori
            </div>

            <h2 class="category-intro-heading">
                Informasi Layanan {{ $category['label'] }}
            </h2>

            <p class="category-intro-desc">{{ $category['description'] }}</p>

            <div class="category-highlights">
                <div class="category-highlight-item">
                    <div class="category-highlight-icon">
                        <i class="bi bi-check2-circle"></i>
                    </div>
                    <span class="category-highlight-text">Unit terkurasi sesuai standar BIOTRA</span>
                </div>
                <div class="category-highlight-item">
                    <div class="category-highlight-icon">
                        <i class="bi bi-images"></i>
                    </div>
                    <span class="category-highlight-text">Gallery foto per unit tersedia</span>
                </div>
                <div class="category-highlight-item">
                    <div class="category-highlight-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <span class="category-highlight-text">Konsultasi layanan tersedia</span>
                </div>
            </div>
        </div>

        {{-- RIGHT: Summary card --}}
        <div class="category-summary-card">
            <div class="category-summary-inner">

                <div class="category-summary-icon">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </div>

                <div class="category-summary-name">{{ $category['label'] }}</div>

                <div class="category-summary-meta">
                    <div class="category-summary-meta-item">
                        <span class="category-summary-meta-label">Area Utama</span>
                        <span class="category-summary-meta-value gold">{{ $category['badge'] }}</span>
                    </div>
                    <div class="category-summary-meta-item">
                        <span class="category-summary-meta-label">Unit Tersedia</span>
                        <span class="category-summary-meta-value">{{ count($units) }} Unit</span>
                    </div>
                    <div class="category-summary-meta-item">
                        <span class="category-summary-meta-label">Status</span>
                        <span class="category-summary-meta-value">Tersedia</span>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="category-summary-cta">
                    <i class="bi bi-chat-dots-fill"></i>
                    Konsultasi Kategori Ini
                </a>

            </div>
        </div>

    </div>
</section>
