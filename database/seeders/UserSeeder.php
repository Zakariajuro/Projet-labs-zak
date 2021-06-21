<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "nom" => "Admin",
                "description" => "je suis une description",
                "image" => "img/roger.jpg",
                "validate" => 1,
                "poste_id" => 1,
                "genre_id" => 1,
                "role_id" => 1,
                "email" => "admin@gmail.com",
                "password" =>  Hash::make('testtest'),
            ],
            [
                "nom" => "Webmaster",
                "description" => "je suis une description",
                "image" => "img/roger.jpg",
                "validate" => 1,
                "poste_id" => 2,
                "genre_id" => 1,
                "role_id" => 2,
                "email" => "webmaster@gmail.com",
                "password" =>  Hash::make('testtest'),
            ],
            [
                "nom" => "Redacteur",
                "description" => "je suis une description",
                "image" => "img/roger.jpg",
                "validate" => 1,
                "poste_id" => 3,
                "genre_id" => 1,
                "role_id" => 3,
                "email" => "redacteur@gmail.com",
                "password" =>  Hash::make('testtest'),
            ]
        ]);
    }
}
