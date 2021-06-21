<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            [
                "auteur" => "jean ",
                "email" => "jean@gmail.be",
                "message" => "super post",
                "article_id" => 1,
                "validate" => 1,
                "created_at" => now(),
            ],
            [
                "auteur" => "bob ",
                "email" => "bob@gmail.be",
                "message" => "pas très pertinent",
                "article_id" => 1,
                "validate" => 1,
                "created_at" => now(),
            ]
        ]);
    }
}
