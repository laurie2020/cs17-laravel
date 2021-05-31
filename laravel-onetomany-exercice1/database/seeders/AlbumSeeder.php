<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'nom' => 'Vacances',
            'description' => "Les photo des vacances d'été",
            'created_at' => now()
        ]);
        DB::table('albums')->insert([
            'nom' => 'Noel',
            'description' => "Les photo des vacances de Noel",
            'created_at' => now()
        ]);
        DB::table('albums')->insert([
            'nom' => 'Voyage',
            'description' => "Les photo des voyages",
            'created_at' => now()
        ]);
    }
}
