<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animaux')->insert([
            "nom" => "julien",
            "espece" => "chien",
            "age" => 2,
            "dateDeNaissance" => "2019-04-28",
            "created_at" => now()
        ]);
        DB::table('animaux')->insert([
            "nom" => "nicolas",
            "espece" => "chat",
            "age" => 1,
            "dateDeNaissance" => "2020-04-28",
            "created_at" => now()
        ]);
        DB::table('animaux')->insert([
            "nom" => "valentin",
            "espece" => "lapin",
            "age" => 3,
            "dateDeNaissance" => "2018-04-28",
            "created_at" => now()
        ]);
    }
}
