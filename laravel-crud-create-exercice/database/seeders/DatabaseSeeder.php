<?php

namespace Database\Seeders;

use App\Models\Bibliotheque;
use App\Models\Image;
use App\Models\Livre;
use App\Models\User;
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
        User::factory(10)->create();
        Bibliotheque::factory(20)->create();
        Livre::factory(50)->create();
        Image::factory(30)->create();
    }
}
