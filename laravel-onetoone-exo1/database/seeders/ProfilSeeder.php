<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("profils")->insert([
            "name" => "Laurie",
            "age" => 20,
            "phone" => "0412675408"
        ]);
    }
}
