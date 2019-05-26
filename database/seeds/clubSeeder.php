<?php

use Illuminate\Database\Seeder;

class clubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Club')->insert([
        	['name' => 'clubhope','email'=>'hope@gmail.com','phone'=>'0364731319','user_name'=>'CLB Hope Đà Nẵng','password'=>'hope123456','address'=>'Danang','avatar'=>'2.jpg'],
            ['name' => 'clubanhhong','email'=>'anhhong@gmail.com','phone'=>'0364731318','user_name'=>'','password'=>'anhhong12345','address'=>'quang tri','avatar'=>'1.jpg'],
            ['name' => 'clubanhsao','email'=>'anhsao@gmail.com','phone'=>'0364731317','user_name'=>'CLB Ánh Sao','password'=>'anhsao12345','address'=>'Ha noi','avatar'=>'3.jpg'],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
            ['name' => '','email'=>'','phone'=>'','user_name'=>'','password','address'=>'','avatar'=>''],
        ]);
    }
}
