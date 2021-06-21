<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            "titre" => "Are you ready to stand out?",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est."
        ]);
    }
}
