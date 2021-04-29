<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voitures')->insert([
            "nom" => "voiture1",
            "description" => "5 places, 3 portes",
            "dateDeFabrication" => "2007-03-12",
            "model" => "KJGUF20",
            "numSerie" => "366"
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture2",
            "description" => "5 places, 5 portes",
            "dateDeFabrication" => "2010-01-30",
            "model" => "FJ6879D",
            "numSerie" => "467"
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture3",
            "description" => "4 places, 3 portes",
            "dateDeFabrication" => "2002-10-11",
            "model" => "90VG5CK9",
            "numSerie" => "580"
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture4",
            "description" => "4 places, 5 portes",
            "dateDeFabrication" => "2009-09-26",
            "model" => "NLJ9VC4",
            "numSerie" => "085"
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture5",
            "description" => "2 places, 3 portes",
            "dateDeFabrication" => "2004-06-13",
            "model" => "HJLPPUI8",
            "numSerie" => "578"
        ]);
        
    }
}
