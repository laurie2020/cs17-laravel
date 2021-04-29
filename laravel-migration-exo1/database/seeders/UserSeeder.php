<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Laurie",
            "email" => "laurie@gmail.com",
            "password" => "laurie",
            "created_at" => now()
        ]);
        DB::table("users")->insert([
            "name" => "Jean",
            "email" => "jean@gmail.com",
            "password" => "jean",
            "created_at" => now()
        ]);
        DB::table("users")->insert([
            "name" => "Marie",
            "email" => "marie@gmail.com",
            "password" => "marie",
            "created_at" => now()
        ]);
    }
}
