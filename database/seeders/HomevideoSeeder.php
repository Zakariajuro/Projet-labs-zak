<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomevideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homevideos')->insert([
            "image"=> "video.jpg",
            "video"=> "https://www.youtube.com/watch?v=JgHfx2v9zOU",
        ]);
    }
}
