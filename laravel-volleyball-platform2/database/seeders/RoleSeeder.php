<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "nom" => "ATT"
        ]);

        DB::table("roles")->insert([
            "nom" => "CT"
        ]);

        DB::table("roles")->insert([
            "nom" => "DC"
        ]);

        DB::table("roles")->insert([
            "nom" => "RP"
        ]);
    }
}
