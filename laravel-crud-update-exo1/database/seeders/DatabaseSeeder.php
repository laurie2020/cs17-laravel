<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Entreprise;
use App\Models\Portofolio;
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
        Article::factory(10)->create();
        Portofolio::factory(12)->create();
        Entreprise::factory(8)->create();
    }
}
