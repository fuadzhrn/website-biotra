<section class="contact-faq-section">
    <div class="container contact-faq-container">
        <div class="contact-faq-header">
            <span class="contact-section-label">
                {{ content_value('contact', 'faq', 'label', 'Pertanyaan Umum') }}
            </span>

            <h2>
                {{ content_value('contact', 'faq', 'title', 'Pertanyaan yang Sering Ditanyakan') }}
            </h2>

            <p>
                {{ content_value('contact', 'faq', 'description', 'Berikut beberapa pertanyaan umum seputar program BIOTRA, konsultasi, dan informasi kemitraan.') }}
            </p>
        </div>

        <div class="faq-layout">
            <div class="faq-intro-card">
                <div class="faq-intro-icon">
                    <i class="bi bi-question-circle"></i>
                </div>

                <h3>
                    {{ content_value('contact', 'faq', 'intro_title', 'Masih Ada yang Ingin Ditanyakan?') }}
                </h3>

                <p>
                    {{ content_value('contact', 'faq', 'intro_description', 'Jika pertanyaan Anda belum terjawab, silakan hubungi tim BIOTRA melalui WhatsApp atau isi form konsultasi yang tersedia.') }}
                </p>

                <a href="{{ content_value('contact', 'faq', 'intro_button_link', 'https://wa.me/6285188341022') }}"
                   target="_blank" class="faq-whatsapp-button">
                    {{ content_value('contact', 'faq', 'intro_button_text', 'Tanya via WhatsApp') }}
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>

            <div class="faq-accordion">
                @php
                $faqs = [
                    ['contact', 'faq', 'faq_1_question', 'Apakah saya bisa konsultasi terlebih dahulu sebelum bergabung?',
                     'faq_1_answer', 'Bisa. Anda dapat menghubungi tim BIOTRA untuk memahami program, skema biaya, benefit, dan ketentuan yang tersedia sebelum mengambil keputusan.'],
                    ['contact', 'faq', 'faq_2_question', 'Apakah program BIOTRA cocok untuk pemula?',
                     'faq_2_answer', 'Program BIOTRA dirancang agar mitra dapat memahami sistem kemitraan dengan lebih praktis. Namun, setiap calon mitra tetap disarankan untuk mempelajari syarat, ketentuan, dan informasi program secara lengkap.'],
                    ['contact', 'faq', 'faq_3_question', 'Apakah hasil simulasi bersifat pasti?',
                     'faq_3_answer', 'Tidak. Simulasi bersifat ilustrasi dan bukan jaminan hasil. Pendapatan dapat berbeda sesuai okupansi, permintaan pasar, performa unit, biaya operasional, dan ketentuan program.'],
                    ['contact', 'faq', 'faq_4_question', 'Bagaimana cara mengetahui program yang paling sesuai?',
                     'faq_4_answer', 'Anda dapat berkonsultasi dengan tim BIOTRA untuk menyesuaikan kebutuhan, tujuan, dan informasi program yang tersedia.'],
                    ['contact', 'faq', 'faq_5_question', 'Apakah BIOTRA memiliki layanan selain kemitraan?',
                     'faq_5_answer', 'BIOTRA memiliki beberapa kategori produk dan layanan seperti villa & staycation, hotel & penginapan, apartemen harian & mingguan, serta rental kendaraan wisata dan bisnis.'],
                ];
                @endphp

                @foreach($faqs as $i => [$p, $s, $qKey, $qDefault, $aKey, $aDefault])
                <div class="faq-item {{ $i === 0 ? 'active' : '' }}">
                    <button type="button" class="faq-question">
                        <span>{{ content_value($p, $s, $qKey, $qDefault) }}</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>

                    <div class="faq-answer">
                        <p>
                            {{ content_value($p, $s, $aKey, $aDefault) }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
