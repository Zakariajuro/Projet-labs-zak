<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HometitreequipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hometitreequipes')->insert([
            "titre"=> "Get in the (Lab) and  meet the team"
        ]);
    }
}
