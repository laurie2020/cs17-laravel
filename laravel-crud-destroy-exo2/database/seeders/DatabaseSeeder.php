<?php

namespace Database\Seeders;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Batiment::factory(3)->create();
        Formation::factory(5)->create();
        Eleve::factory(50)->create();
    }
}
