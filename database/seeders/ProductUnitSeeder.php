<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use App\Models\ProductUnit;
use Illuminate\Support\Str;

class ProductUnitSeeder extends Seeder
{
    public function run(): void
    {
        $units = [
            'villa-staycation' => [
                [
                    'name'        => 'Villa Jimbaran',
                    'location'    => 'Jimbaran, Bali',
                    'type'        => 'Villa & Staycation',
                    'description' => 'Villa dengan suasana nyaman dan lokasi strategis untuk kebutuhan liburan, staycation, maupun potensi penyewaan dalam program kemitraan BIOTRA.',
                ],
                [
                    'name'        => 'Villa Uluwatu',
                    'location'    => 'Uluwatu, Bali',
                    'type'        => 'Villa & Staycation',
                    'description' => 'Villa dengan karakter premium yang mendukung kebutuhan wisata, liburan, dan pengalaman menginap yang lebih berkesan di area Uluwatu Bali.',
                ],
            ],
            'hotel-penginapan' => [
                [
                    'name'        => 'Hotel PIK 2',
                    'location'    => 'PIK 2, Jakarta Utara',
                    'type'        => 'Hotel & Penginapan',
                    'description' => 'Hotel nyaman di kawasan PIK 2 yang cocok untuk perjalanan bisnis maupun wisata di area Jakarta.',
                ],
                [
                    'name'        => 'Penginapan Jakarta',
                    'location'    => 'Jakarta',
                    'type'        => 'Hotel & Penginapan',
                    'description' => 'Pilihan penginapan di Jakarta yang strategis dan nyaman untuk berbagai kebutuhan perjalanan.',
                ],
            ],
            'apartemen' => [
                [
                    'name'        => 'Apartemen Bekasi',
                    'location'    => 'Bekasi',
                    'type'        => 'Apartemen Harian & Mingguan',
                    'description' => 'Unit apartemen harian dan mingguan di Bekasi yang fleksibel untuk kebutuhan pekerja dan karyawan perusahaan.',
                ],
                [
                    'name'        => 'Apartemen Cikarang',
                    'location'    => 'Cikarang',
                    'type'        => 'Apartemen Harian & Mingguan',
                    'description' => 'Hunian sementara di Cikarang yang strategis untuk pekerja industri dan karyawan perusahaan kawasan MM2100.',
                ],
            ],
            'rental-kendaraan' => [
                [
                    'name'        => 'Toyota Avanza',
                    'location'    => 'Bali / Jakarta',
                    'type'        => 'Rental Kendaraan',
                    'description' => 'Kendaraan nyaman dan ekonomis untuk perjalanan wisata, bisnis, maupun transportasi harian.',
                ],
                [
                    'name'        => 'Toyota Innova',
                    'location'    => 'Bali / Jakarta',
                    'type'        => 'Rental Kendaraan',
                    'description' => 'Kendaraan premium untuk perjalanan keluarga, bisnis, atau kebutuhan antar-jemput yang membutuhkan kapasitas lebih besar.',
                ],
            ],
        ];

        foreach ($units as $categorySlug => $categoryUnits) {
            $category = ProductCategory::where('slug', $categorySlug)->first();
            if (!$category) continue;

            foreach ($categoryUnits as $i => $unitData) {
                $slug = Str::slug($unitData['name']);
                ProductUnit::firstOrCreate(
                    [
                        'product_category_id' => $category->id,
                        'slug'                => $slug,
                    ],
                    array_merge($unitData, [
                        'slug'       => $slug,
                        'sort_order' => $i + 1,
                        'is_active'  => true,
                    ])
                );
            }
        }
    }
}
