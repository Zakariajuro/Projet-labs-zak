<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([
            ["poste" => "CEO"],
            ["poste" => "Developpeur web"],
            ["poste" => "Designer"],
    
        ]);
    }
}
