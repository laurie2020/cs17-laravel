<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            'nom' => "Coding School",
            'description' => 'Formation en developpement web mobile',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => "Webmaster School",
            'description' => 'Formation en marketing digital',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => "Menage",
            'description' => 'Formation en nettoyage',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => "Tricherie",
            'description' => 'Formation en tricherie',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => "Informatique",
            'description' => 'Formation en informatique',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => "Bricolage",
            'description' => 'Formation en bricolage',
            'created_at' => now()
        ]);
    }
}
