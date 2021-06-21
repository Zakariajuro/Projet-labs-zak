<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            ["icone" => "flaticon-023-flask"],
            ["icone" => "flaticon-011-compass"],
            ["icone" => "flaticon-037-idea"],
            ["icone" => "flaticon-023-flask"],
            ["icone" => "flaticon-011-compass"],
            ["icone" => "flaticon-037-idea"],
            ["icone" => "flaticon-039-vector"],
            ["icone" => "flaticon-036-brainstorming"],
            ["icone" => "flaticon-026-search"],
            ["icone" => "flaticon-018-laptop-1"],
            ["icone" => "flaticon-043-sketch"],
            ["icone" => "flaticon-012-cube"],
            ["icone" => "flaticon-002-caliper"],
            ["icone" => "flaticon-019-coffee-cup"],
            ["icone" => "flaticon-020-creativity"],
            ["icone" => "flaticon-037-idea"],
            ["icone" => "flaticon-025-imagination"],
            ["icone" => "flaticon-008-team"],
        ]);

    }
}
