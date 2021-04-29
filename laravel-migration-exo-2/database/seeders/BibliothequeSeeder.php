<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliothequeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bibliotheques')->insert([
            "nom" => "Bibli1",
            "description" => "Bibliotheque numero un",
            "created_at" => now()
        ]);
        DB::table('bibliotheques')->insert([
            "nom" => "Bibli2",
            "description" => "Bibliotheque numero deux",
            "created_at" => now()
        ]);
        DB::table('bibliotheques')->insert([
            "nom" => "Bibli3",
            "description" => "Bibliotheque numero trois",
            "created_at" => now()
        ]);
    }
}
