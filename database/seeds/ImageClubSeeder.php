<?php

use Illuminate\Database\Seeder;

class ImageClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('image_club')->insert([
        ['id_activity'=>'1','image'=>'a1.jpg'],
        ['id_activity'=>'1','image'=>'a2.jpg'],
        ['id_activity'=>'1','image'=>'a3.jpg'],
        
        ['id_activity'=>'2','image'=>'b1.jpg'],
        ['id_activity'=>'2','image'=>'b2.jpg'],
        ['id_activity'=>'2','image'=>'b3.jpg'],

        ['id_activity'=>'3','image'=>'c1.jpg'],
        ['id_activity'=>'3','image'=>'c2.jpg'],
        ['id_activity'=>'3','image'=>'c3.jpg'],

        ['id_activity'=>'4','image'=>'d1.jpg'],
        ['id_activity'=>'4','image'=>'d2.jpg'],
        ['id_activity'=>'4','image'=>'d3.jpg'],
        ]);
    }
}
