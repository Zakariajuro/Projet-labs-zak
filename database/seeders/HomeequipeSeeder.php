<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeequipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homeequipes')->insert([
            [
                "image"=> "team/1.jpg",
                "nom"=> "Christine Williams",
                "poste_id" => 2,
            ],
            [
                "image"=> "team/2.jpg",
                "nom"=> "Christine Williams",
                "poste_id" => 1,
            ],
            [
                "image"=> "team/3.jpg",
                "nom"=> "Christine Williams",
                "poste_id" => 3,
            ],
            [
                "image"=> "team/3.jpg",
                "nom"=> "Christine Williams test dev web",
                "poste_id" => 2,
            ],
            [
                "image"=> "team/3.jpg",
                "nom"=> "Christine Williams test designer",
                "poste_id" => 3,
            ],

            
        ]);
    }
}
