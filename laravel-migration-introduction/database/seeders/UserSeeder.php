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
            "email" => "laurieiula2016@gmail.com",
            "password" => "laurie",
            "created_at" => now()
        ]);
        DB::table("users")->insert([
                "name" => "Mahad",
                "email" => "mahad@gmail.com",
                "password" => "mahad",
                "created_at" => now()
            ]
        );
    }
}
