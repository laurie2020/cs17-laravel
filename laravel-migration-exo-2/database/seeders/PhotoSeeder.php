<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            "nom" => "photo1",
            "path" => "bibliotheque/album/photo1",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo2",
            "path" => "bibliotheque/album/photo2",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo3",
            "path" => "bibliotheque/album/photo3",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo4",
            "path" => "bibliotheque/album/photo4",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo5",
            "path" => "bibliotheque/album/photo5",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo6",
            "path" => "bibliotheque/album/photo6",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo7",
            "path" => "bibliotheque/album/photo7",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo8",
            "path" => "bibliotheque/album/photo8",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo9",
            "path" => "bibliotheque/album/photo9",
            "created_at" => now()
        ]);
        DB::table('photos')->insert([
            "nom" => "photo10",
            "path" => "bibliotheque/album/photo10",
            "created_at" => now()
        ]);
    }
}
