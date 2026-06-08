<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $updates = [
            // About - Profile
            ['page' => 'about', 'section' => 'profile',           'key' => 'sector_6',          'value' => 'Mobil Rental'],
            ['page' => 'about', 'section' => 'profile',           'key' => 'stat_2_title',       'value' => 'Mobil Rental'],
            ['page' => 'about', 'section' => 'profile',           'key' => 'title',              'value' => 'Membuka Akses Bisnis Modern di Sektor Properti & Mobil Rental'],

            // About - Operational Area
            ['page' => 'about', 'section' => 'operational_area',  'key' => 'area_4_location',    'value' => 'Mobil Rental'],

            // Products Services - Rental
            ['page' => 'products_services', 'section' => 'rental', 'key' => 'location_badge',    'value' => 'Mobil Rental'],
            ['page' => 'products_services', 'section' => 'rental', 'key' => 'title',             'value' => 'Solusi Mobil Rental untuk Perjalanan Wisata, Bisnis, dan Transportasi Harian'],

            // Partnership - Industry
            ['page' => 'partnership', 'section' => 'industry',    'key' => 'title',              'value' => 'Peluang Bisnis di Sektor Pariwisata, Akomodasi, dan Mobil Rental'],
        ];

        foreach ($updates as $u) {
            DB::table('page_contents')
                ->where('page', $u['page'])
                ->where('section', $u['section'])
                ->where('key', $u['key'])
                ->update(['value' => $u['value']]);
        }
    }

    public function down(): void
    {
        $reverts = [
            ['page' => 'about', 'section' => 'profile',           'key' => 'sector_6',          'value' => 'Mobilitas'],
            ['page' => 'about', 'section' => 'profile',           'key' => 'stat_2_title',       'value' => 'Mobilitas'],
            ['page' => 'about', 'section' => 'profile',           'key' => 'title',              'value' => 'Membuka Akses Bisnis Modern di Sektor Properti & Mobilitas'],
            ['page' => 'about', 'section' => 'operational_area',  'key' => 'area_4_location',    'value' => 'Mobility'],
            ['page' => 'products_services', 'section' => 'rental', 'key' => 'location_badge',    'value' => 'Mobility'],
            ['page' => 'products_services', 'section' => 'rental', 'key' => 'title',             'value' => 'Solusi Mobilitas untuk Perjalanan Wisata, Bisnis, dan Transportasi Harian'],
            ['page' => 'partnership', 'section' => 'industry',    'key' => 'title',              'value' => 'Peluang Bisnis di Sektor Pariwisata, Akomodasi, dan Mobilitas'],
        ];

        foreach ($reverts as $u) {
            DB::table('page_contents')
                ->where('page', $u['page'])
                ->where('section', $u['section'])
                ->where('key', $u['key'])
                ->update(['value' => $u['value']]);
        }
    }
};
