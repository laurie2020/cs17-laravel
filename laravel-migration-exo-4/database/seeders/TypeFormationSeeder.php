<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_formation')->insert([
            'nom' => "1 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "2 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "3 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "4 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "5 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "6 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "7 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "8 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "9 mois"
        ]);
        DB::table('types_formation')->insert([
            'nom' => "10 mois"
        ]);
    }
}
