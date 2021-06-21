<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "icone_id" => 13,
                "titre"=> "Get in the lab",
                "description"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icone_id" => 14,
                "titre"=> "Projects online",
                "description"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icone_id" => 15,
                "titre"=> "SMART MARKETING",
                "description"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],

        ]);
    }
}
