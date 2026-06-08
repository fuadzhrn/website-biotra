<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('product_categories')
            ->where('slug', 'rental-kendaraan')
            ->update(['badge' => 'Mobil Rental']);
    }

    public function down(): void
    {
        DB::table('product_categories')
            ->where('slug', 'rental-kendaraan')
            ->update(['badge' => 'Mobility']);
    }
};
