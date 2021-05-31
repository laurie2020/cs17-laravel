<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("equipes")->insert([
            "nom" => "",
            "ville" => "",
            "pays" => "",
            "max" => 0,
            "ATT" => 0,
            "CT" => 0,
            "DC" => 0,
            "RP" => 0,
            "continent_id" => 1
        ]);

        DB::table("equipes")->insert([
            "nom" => "Trentino Volley",
            "ville" => "Trento",
            "pays" => "Italie",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 2
        ]);

        DB::table("equipes")->insert([
            "nom" => "VC Zenit Kazan",
            "ville" => "Kazan",
            "pays" => "Russie",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 2
        ]);

        DB::table("equipes")->insert([
            "nom" => "Zaksa Kedzierrzyn-Kozle",
            "ville" => " Kędzierzyn-Koźle",
            "pays" => "Pologne",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 2
        ]);

        DB::table("equipes")->insert([
            "nom" => "Noliko Maaseik",
            "ville" => "Maaseik",
            "pays" => "Belgique",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 2
        ]);

        DB::table("equipes")->insert([
            "nom" => "Halkbank Ankara",
            "ville" => "Ankara",
            "pays" => "Turquie",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 2
        ]);

        DB::table("equipes")->insert([
            "nom" => "Ontario Matadors",
            "ville" => "Ontario",
            "pays" => "Canada",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 3
        ]);

        DB::table("equipes")->insert([
            "nom" => "Las Vegas Ramblers",
            "ville" => "Las Vegas",
            "pays" => "Etats-Unis",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 3
        ]);

        DB::table("equipes")->insert([
            "nom" => "UPCN San Juan",
            "ville" => "San Juan",
            "pays" => "Argentine",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 4
        ]);

        DB::table("equipes")->insert([
            "nom" => "Sada Cruzeiro",
            "ville" => "Contagem",
            "pays" => "Brésil",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 4
        ]);

        DB::table("equipes")->insert([
            "nom" => "Payakan Téhéran",
            "ville" => "Téhéran",
            "pays" => "Iran",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 5
        ]);

        DB::table("equipes")->insert([
            "nom" => "Hanoï",
            "ville" => "Hanoï",
            "pays" => "Vietnam",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 5
        ]);

        DB::table("equipes")->insert([
            "nom" => "Hanoï",
            "ville" => "Hanoï",
            "pays" => "Vietnam",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 5
        ]);

        DB::table("equipes")->insert([
            "nom" => "Hanoï",
            "ville" => "Hanoï",
            "pays" => "Vietnam",
            "max" => 12,
            "ATT" => 3,
            "CT" => 3,
            "DC" => 3,
            "RP" => 3,
            "continent_id" => 5
        ]);
    }
}
