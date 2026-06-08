<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $updates = [
            ['page' => 'about',       'section' => 'business_concept', 'key' => 'title',          'value' => 'Sistem Kemitraan dengan Konsep Hak Pakai Gratis dan Hak Sewa'],
            ['page' => 'about',       'section' => 'business_concept', 'key' => 'card_1_title',   'value' => 'Hak Pakai Gratis'],
            ['page' => 'partnership', 'section' => 'benefits',         'key' => 'benefit_1_title','value' => 'Hak Pakai Gratis Unit'],
            ['page' => 'partnership', 'section' => 'pricing',          'key' => 'benefit_1',      'value' => 'Hak pakai gratis dan hak sewa sesuai ketentuan program'],
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
            ['page' => 'about',       'section' => 'business_concept', 'key' => 'title',          'value' => 'Sistem Kemitraan dengan Konsep Hak Pakai dan Hak Sewa'],
            ['page' => 'about',       'section' => 'business_concept', 'key' => 'card_1_title',   'value' => 'Hak Pakai'],
            ['page' => 'partnership', 'section' => 'benefits',         'key' => 'benefit_1_title','value' => 'Hak Pakai Unit'],
            ['page' => 'partnership', 'section' => 'pricing',          'key' => 'benefit_1',      'value' => 'Hak pakai dan hak sewa sesuai ketentuan program'],
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
