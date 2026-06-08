<section class="reason-section">
    <div class="container reason-container">
        <div class="reason-header">
            <span class="section-label">
                {{ content_value('about', 'reason', 'label', 'Kenapa BIOTRA Hadir') }}
            </span>

            <h2>
                {{ content_value('about', 'reason', 'title', 'Solusi untuk Memulai Bisnis Tanpa Harus Mengelola Semuanya Sendiri') }}
            </h2>

            <p>
                {{ content_value('about', 'reason', 'description', 'Banyak orang ingin memiliki bisnis dan penghasilan tambahan, tetapi sering terkendala modal besar, operasional yang rumit, keterbatasan waktu, dan kurangnya pengalaman dalam mengelola bisnis properti maupun kendaraan.') }}
            </p>
        </div>

        <div class="reason-grid">
            <div class="reason-card problem-card">
                <div class="reason-card-top">
                    <div class="reason-icon problem-icon">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>

                    <div>
                        <span class="reason-label">Tantangan</span>
                        <h3>{{ content_value('about', 'reason', 'problem_title', 'Masalah yang Sering Terjadi') }}</h3>
                    </div>
                </div>

                <ul class="reason-list">
                    <li>
                        <i class="bi bi-x-circle"></i>
                        <span>{{ content_value('about', 'reason', 'problem_point_1', 'Ingin punya bisnis, tetapi modal awal terlalu besar') }}</span>
                    </li>

                    <li>
                        <i class="bi bi-x-circle"></i>
                        <span>{{ content_value('about', 'reason', 'problem_point_2', 'Operasional properti dan kendaraan membutuhkan waktu') }}</span>
                    </li>

                    <li>
                        <i class="bi bi-x-circle"></i>
                        <span>{{ content_value('about', 'reason', 'problem_point_3', 'Maintenance, booking, dan promosi perlu dikelola secara konsisten') }}</span>
                    </li>

                    <li>
                        <i class="bi bi-x-circle"></i>
                        <span>{{ content_value('about', 'reason', 'problem_point_4', 'Tidak semua orang memiliki pengalaman di sektor properti dan mobil rental') }}</span>
                    </li>
                </ul>
            </div>

            <div class="reason-card solution-card">
                <div class="reason-card-top">
                    <div class="reason-icon solution-icon">
                        <i class="bi bi-check2-circle"></i>
                    </div>

                    <div>
                        <span class="reason-label">Solusi</span>
                        <h3>{{ content_value('about', 'reason', 'solution_title', 'Solusi dari BIOTRA') }}</h3>
                    </div>
                </div>

                <p class="solution-description">
                    {{ content_value('about', 'reason', 'solution_description', 'BIOTRA hadir sebagai solusi kemitraan yang lebih praktis dengan menyediakan akses ke sektor properti, akomodasi, dan rental kendaraan. Operasional dibantu oleh BIOTRA, sehingga mitra dapat menjalankan program dengan sistem yang lebih terarah.') }}
                </p>

                <ul class="reason-list solution-list">
                    <li>
                        <i class="bi bi-check-circle"></i>
                        <span>{{ content_value('about', 'reason', 'solution_point_1', 'Akses bisnis properti dan mobil rental') }}</span>
                    </li>

                    <li>
                        <i class="bi bi-check-circle"></i>
                        <span>{{ content_value('about', 'reason', 'solution_point_2', 'Operasional dibantu oleh BIOTRA') }}</span>
                    </li>

                    <li>
                        <i class="bi bi-check-circle"></i>
                        <span>{{ content_value('about', 'reason', 'solution_point_3', 'Unit dapat digunakan atau disewakan') }}</span>
                    </li>

                    <li>
                        <i class="bi bi-check-circle"></i>
                        <span>{{ content_value('about', 'reason', 'solution_point_4', 'Sistem kemitraan lebih praktis dan terarah') }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="reason-cta">
            <div class="reason-cta-content">
                <span>{{ content_value('about', 'reason', 'cta_label', 'Konsultasi Program') }}</span>

                <h3>
                    {{ content_value('about', 'reason', 'cta_title', 'Ingin Mengenal Program BIOTRA Lebih Dekat?') }}
                </h3>

                <p>
                    {{ content_value('about', 'reason', 'cta_description', 'Pelajari bagaimana sistem kemitraan BIOTRA dapat membantu Anda memiliki akses bisnis di sektor properti dan mobil rental dengan cara yang lebih praktis.') }}
                </p>
            </div>

            <a href="{{ content_value('about', 'reason', 'cta_button_link', route('contact')) }}"
               class="btn-primary reason-cta-button">
                {{ content_value('about', 'reason', 'cta_button_text', 'Konsultasi Sekarang') }}
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
