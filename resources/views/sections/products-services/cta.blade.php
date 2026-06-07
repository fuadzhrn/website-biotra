<section class="products-final-cta-section">
    <div class="container">
        <div class="products-final-cta">
            <div class="products-final-cta-content">
                <span class="products-final-cta-label">
                    {{ content_value('products_services', 'cta', 'label', 'Konsultasi Produk BIOTRA') }}
                </span>

                <h2>
                    {{ content_value('products_services', 'cta', 'title', 'Ingin Mengetahui Produk BIOTRA yang Paling Sesuai?') }}
                </h2>

                <p>
                    {{ content_value('products_services', 'cta', 'description', 'Setiap kategori produk BIOTRA memiliki karakter dan potensi yang berbeda. Konsultasikan kebutuhan Anda bersama tim BIOTRA untuk memahami pilihan program, sistem kemitraan, dan informasi layanan secara lebih lengkap.') }}
                </p>
            </div>

            <a href="{{ content_value('products_services', 'cta', 'button_link', route('contact')) }}" class="products-final-cta-button">
                {{ content_value('products_services', 'cta', 'button_text', 'Konsultasi Sekarang') }}
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
