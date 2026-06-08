<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('page_contents')
            ->where('page', 'contact')
            ->where('section', 'location_map')
            ->where('key', 'maps_embed')
            ->update([
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1667.822487947873!2d106.81753639358794!3d-6.161183943536069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f675f94017cb%3A0x156a91c20531e7f3!2sJl.%20Gajah%20Mada%20No.19-26%2C%20RT.2%2FRW.1%2C%20Petojo%20Utara%2C%20Kecamatan%20Gambir%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010130!5e0!3m2!1sid!2sid!4v1780902188662!5m2!1sid!2sid',
            ]);
    }

    public function down(): void
    {
        DB::table('page_contents')
            ->where('page', 'contact')
            ->where('section', 'location_map')
            ->where('key', 'maps_embed')
            ->update([
                'value' => 'https://www.google.com/maps?q=Jakarta%20Indonesia&output=embed',
            ]);
    }
};
