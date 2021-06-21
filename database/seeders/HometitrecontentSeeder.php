<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HometitrecontentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hometitrecontents')->insert([
            "titre" => "Get in the Lab and (discover) the world"
        ]);
    }
}
