<section class="industry-opportunity-section">
    <div class="container industry-opportunity-container">
        <div class="industry-content">
            <span class="partnership-section-label">
                {{ content_value('partnership', 'industry', 'label', 'Peluang Industri') }}
            </span>

            <h2>
                {{ content_value('partnership', 'industry', 'title', 'Peluang Bisnis di Sektor Pariwisata, Akomodasi, dan Mobil Rental') }}
            </h2>

            <p>
                {{ content_value('partnership', 'industry', 'paragraph_1', 'Kebutuhan pasar terhadap penginapan, staycation, perjalanan bisnis, wisata, dan transportasi terus berjalan. BIOTRA hadir untuk membuka akses kemitraan di sektor properti dan mobilitas dengan sistem yang lebih praktis, terarah, dan dikelola secara profesional.') }}
            </p>

            <p>
                {{ content_value('partnership', 'industry', 'paragraph_2', 'Melalui program ini, mitra dapat memahami bagaimana peluang akomodasi dan mobilitas dapat dihubungkan dalam satu ekosistem bisnis yang saling mendukung.') }}
            </p>

            <div class="industry-points">
                <div class="industry-point">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('partnership', 'industry', 'point_1', 'Kebutuhan penginapan dan staycation terus berjalan') }}</span>
                </div>

                <div class="industry-point">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('partnership', 'industry', 'point_2', 'Perjalanan bisnis membutuhkan akomodasi yang praktis') }}</span>
                </div>

                <div class="industry-point">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('partnership', 'industry', 'point_3', 'Sektor wisata membutuhkan dukungan transportasi') }}</span>
                </div>

                <div class="industry-point">
                    <i class="bi bi-check2-circle"></i>
                    <span>{{ content_value('partnership', 'industry', 'point_4', 'Rental kendaraan menjadi bagian penting dari mobilitas') }}</span>
                </div>
            </div>
        </div>

        <div class="industry-chart-wrapper">
            <div class="industry-chart-card">
                <div class="chart-card-header">
                    <div>
                        <span>{{ content_value('partnership', 'industry', 'chart_1_label', 'Grafik 01') }}</span>
                        <h3>{{ content_value('partnership', 'industry', 'chart_1_title', 'Tren Okupansi Hotel & Villa') }}</h3>
                    </div>

                    <i class="bi bi-graph-up-arrow"></i>
                </div>

                <p>
                    {{ content_value('partnership', 'industry', 'chart_1_description', 'Visualisasi tren akomodasi untuk menggambarkan kebutuhan pasar terhadap hotel, villa, dan penginapan.') }}
                </p>

                <div class="chart-box">
                    <canvas id="accommodationChart"></canvas>
                </div>
            </div>

            <div class="industry-chart-card">
                <div class="chart-card-header">
                    <div>
                        <span>{{ content_value('partnership', 'industry', 'chart_2_label', 'Grafik 02') }}</span>
                        <h3>{{ content_value('partnership', 'industry', 'chart_2_title', 'Pertumbuhan Rental Mobil') }}</h3>
                    </div>

                    <i class="bi bi-bar-chart-line"></i>
                </div>

                <p>
                    {{ content_value('partnership', 'industry', 'chart_2_description', 'Visualisasi tren mobilitas untuk menggambarkan kebutuhan pasar terhadap rental kendaraan wisata dan bisnis.') }}
                </p>

                <div class="chart-box">
                    <canvas id="mobilityChart"></canvas>
                </div>
            </div>

            <div class="industry-chart-note">
                <i class="bi bi-info-circle"></i>
                <span>
                    {{ content_value('partnership', 'industry', 'chart_note', 'Grafik ditampilkan sebagai ilustrasi tren sektor akomodasi dan mobilitas, bukan sebagai jaminan hasil atau pendapatan.') }}
                </span>
            </div>
        </div>
    </div>
</section>
