<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticletagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articletags')->insert([
            [
                "article_id" => 1,
                "tag_id" => 1,
                "created_at" => now(),
            ],
            [
                "article_id" => 1,
                "tag_id" => 2,
                "created_at" => now(),

            ],
            [
                "article_id" => 2,
                "tag_id" => 3,
                "created_at" => now(),

            ],
            [
                "article_id" => 3,
                "tag_id" => 4,
                "created_at" => now(),

            ],

        
        ]);
    }
}
