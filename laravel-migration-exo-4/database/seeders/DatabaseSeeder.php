<?php

namespace Database\Seeders;

use App\Models\Eleve;
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
        $this->call(BatimentSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(TypeFormationSeeder::class);

        Eleve::factory(50)->create();
    }
}
