<?php

use Illuminate\Database\Seeder;

class DonateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Donation')->insert([
        	['id_user' => '1','id_prod' => '2','id_club' => '2','content'=> 'Chuc hoat dong se thanh cong'],
        ]);
    }
}
