<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ["categorie" => "Vestibulum maximus"],
            ["categorie" => "Nisi eu lobortis pharetra"],
            ["categorie" => "Orci quam accumsan"],
            ["categorie" => "Auguen"],
            ["categorie" => "pharetra massa"],
            ["categorie" => "Tellus ut nulla"],
            ["categorie" => "Etiam egestas viverra"],

        ]);
    }
}
