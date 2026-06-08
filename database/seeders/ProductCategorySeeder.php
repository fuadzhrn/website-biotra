<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'        => 'Villa & Staycation',
                'slug'        => 'villa-staycation',
                'label'       => 'Villa & Staycation',
                'subtitle'    => 'Unit villa dan staycation pilihan di Bali untuk liburan dan wisata.',
                'description' => 'BIOTRA menyediakan akses penginapan villa dan staycation di kawasan Bali yang dikelola secara profesional. Setiap unit dikurasi sesuai standar kenyamanan dan keamanan untuk wisatawan maupun traveler bisnis.',
                'badge'       => 'Bali',
                'breadcrumb'  => 'Villa & Staycation',
                'sort_order'  => 1,
            ],
            [
                'name'        => 'Hotel & Penginapan',
                'slug'        => 'hotel-penginapan',
                'label'       => 'Hotel & Penginapan',
                'subtitle'    => 'Akomodasi hotel pilihan untuk perjalanan bisnis dan wisata.',
                'description' => 'BIOTRA mengelola jaringan hotel dan penginapan untuk memenuhi kebutuhan akomodasi perjalanan bisnis, wisata, maupun menginap jangka pendek di berbagai kota strategis.',
                'badge'       => 'Jakarta / PIK 2',
                'breadcrumb'  => 'Hotel & Penginapan',
                'sort_order'  => 2,
            ],
            [
                'name'        => 'Apartemen Harian & Mingguan',
                'slug'        => 'apartemen',
                'label'       => 'Apartemen Harian & Mingguan',
                'subtitle'    => 'Hunian sementara fleksibel untuk pekerja dan kebutuhan bisnis.',
                'description' => 'BIOTRA menyediakan unit apartemen harian dan mingguan sebagai pilihan hunian sementara yang nyaman dan fleksibel untuk pekerja, karyawan perusahaan, maupun kebutuhan bisnis di area industri.',
                'badge'       => 'Bekasi & Cikarang',
                'breadcrumb'  => 'Apartemen',
                'sort_order'  => 3,
            ],
            [
                'name'        => 'Rental Kendaraan',
                'slug'        => 'rental-kendaraan',
                'label'       => 'Rental Kendaraan',
                'subtitle'    => 'Layanan mobilitas untuk perjalanan wisata dan bisnis.',
                'description' => 'BIOTRA menyediakan layanan rental kendaraan untuk mendukung mobilitas wisata, perjalanan bisnis, dan transportasi harian. Armada terpilih, terawat, dan tersedia untuk berbagai kebutuhan.',
                'badge'       => 'Mobil Rental',
                'breadcrumb'  => 'Rental Kendaraan',
                'sort_order'  => 4,
            ],
        ];

        foreach ($categories as $data) {
            ProductCategory::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
