<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objets')->insert([
            ["objet"=> "Demande de poste"],
            ["objet"=> "Demande de visite"],
            ["objet"=> "Demande d'informations"],

        ]);
    }
}
