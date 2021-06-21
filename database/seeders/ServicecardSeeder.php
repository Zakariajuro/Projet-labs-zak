<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicecardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicecards')->insert([
            [
                "image" => "card-1.jpg",
                "titre" => "Get in the lab",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "image" => "card-2.jpg",
                "titre" => "Projects online",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "image" => "card-3.jpg",
                "titre" => "SMART MARKETING",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],

        ]);
    }
}


