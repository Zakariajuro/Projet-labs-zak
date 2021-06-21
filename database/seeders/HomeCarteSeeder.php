<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_cartes')->insert([
            [
                "icone_id" => 1,
                "titre" => "Get in the lab",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icone_id" => 2,
                "titre" => "Projects online",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icone_id" => 3,
                "titre" => "SMART MARKETING",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
            [
                "icone_id" => 4,
                "titre" => "TEST RANDOM",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at" => now(),
            ],
        ]);
    }
}
