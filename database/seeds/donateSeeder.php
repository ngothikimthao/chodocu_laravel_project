<?php

use Illuminate\Database\Seeder;

class donateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Donation')->insert([
        	['id_user' => '1','id_prod' => '2','id_club' => '1','content'=> 'Chuc hoat dong se thanh cong'],
            ['id_user' => '2','id_prod' => '3','id_club' => '2','content'=> 'Tôi xin ủng hộ'],
            ['id_user' => '3','id_prod' => '3','id_club' => '3','content'=> 'Tôi xin ủng hộ'],
        ]);
    }
}
