<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturebisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featurebis')->insert([
            [
                "icone_id" => 16,
                "titre"=> "Get in the lab",
                "description"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icone_id" => 17,
                "titre"=> "Projects online",
                "description"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icone_id" => 18,
                "titre"=> "SMART MARKETING",
                "description"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
        ]);
    }
}
