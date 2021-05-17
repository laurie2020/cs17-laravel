<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batiments')->insert([
            'nom'=> 'Molengeek',
            'description' => 'Etablissement de formation en developpement web et marketing',
            'created_at' => now()
        ]);
    }
}
