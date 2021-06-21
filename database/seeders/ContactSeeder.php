<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            "position" => "40.801485408197856, -73.96745953467104",
            "titre"=> "Contact us",
            "description"=> "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            "soustitre"=> "Main Office",
            "adresse"=> "C/ Libertad, 34  05200 Arévalo ",
            "telephone"=> 34832453,
            "email"=> "hello@company.com",
        ]);
    }
}
