<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "auteur" => "rtbf tendance",
            "date" => "2021-04-26",
            "commentaires" => "Bon article",
            "created_at" => now()
        ]);
        DB::table("articles")->insert([
            "auteur" => "rtbf tendance",
            "date" => "2021-04-27",
            "commentaires" => "Mauvais article",
            "created_at" => now()
        ]);
        DB::table("articles")->insert([
            "auteur" => "rtbf tendance",
            "date" => "2021-04-27",
            "commentaires" => "Moyen article",
            "created_at" => now()
        ]);
        DB::table("articles")->insert([
            "auteur" => "rtbf tendance",
            "date" => "2021-04-27",
            "commentaires" => "Article pourri",
            "created_at" => now()
        ]);
        DB::table("articles")->insert([
            "auteur" => "rtbf tendance",
            "date" => "2021-04-27",
            "commentaires" => "Article genial",
            "created_at" => now()
        ]);

    }
}
