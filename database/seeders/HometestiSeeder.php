<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HometestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hometestis')->insert([
            [
                "texte"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=> "avatar/01.jpg",
                "nom"=> "Michael Smith",
                "fonction"=> "CEO Company",
            ],
            [
                "texte"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=> "avatar/02.jpg",
                "nom"=> "Michael Smith",
                "fonction"=> "CEO Company",
            ],
            [
                "texte"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=> "avatar/01.jpg",
                "nom"=> "Michael Smith",
                "fonction"=> "CEO Company",
            ],
            [
                "texte"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=> "avatar/02.jpg",
                "nom"=> "Michael Smith",
                "fonction"=> "CEO Company",
            ],
            [
                "texte"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=> "avatar/01.jpg",
                "nom"=> "Michael Smith",
                "fonction"=> "CEO Company",
            ],
            [
                "texte"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=> "avatar/02.jpg",
                "nom"=> "Michael Smith",
                "fonction"=> "CEO Company",
            ],
        ]);
    }
}
