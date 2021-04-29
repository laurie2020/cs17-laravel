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
        DB::table("albums")->insert([
            "nom" => "album1",
            "description" => "Album numero un",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album2",
            "description" => "Album numero deux",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album3",
            "description" => "Album numero trois",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album4",
            "description" => "Album numero quatre",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album5",
            "description" => "Album numero cinq",
            "created_at" => now()
        ]);
    }
}
