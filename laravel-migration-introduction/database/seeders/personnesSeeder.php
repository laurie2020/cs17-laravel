<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnes')->insert([
            "name" => "Laurie",
            "age" => 20,
            "ddn" => "2000-06-13",
            "created_at" => now()
        ]);
    }
}
