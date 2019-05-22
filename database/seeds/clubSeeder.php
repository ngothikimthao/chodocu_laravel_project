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
        	['name' => 'clubhope','email'=>'hope@gmail.com','phone'=>'0364731319','username'=>'CLB Hope Đà Nẵng','password'=>'hope123456','address'=>'Danang','avata'=>'hope.jpg'],
            ['name' => 'clubanhhong','email'=>'anhhong@gmail.com','phone'=>'0364731318','username'=>'CLB Ánh Mai','password'=>'anhhong12345','address'=>'quang tri','avata'=>'anhsao.jpg'],
            ['name' => 'clubanhsao','email'=>'anhsao@gmail.com','phone'=>'0364731317','username'=>'CLB Ánh Sao','password'=>'anhsao12345','address'=>'Ha noi','avata'=>'anhtho.jpg'],
            ['name' => 'clubanhtho','email'=>'anhtho@gmail.com','phone'=>'0364731316','username'=>'CLB Ánh Thơ','password'=>'anhtho12345','address'=>'Ha noi','avata'=>'me.jpg'],
            ['name' => 'clubthientam','email'=>'thientam@gmail.com','phone'=>'0364731315','username'=>'CLB Thiện Tâm','password'=>'thientam12345','address'=>'Ha noi','avata'=>'nuocngoai.jpg'],
            ['name' => 'clubtreem','email'=>'treem@gmail.com','phone'=>'0364731314','username'=>'CLB Trẻ Em','password'=>'treem12345','address'=>'Đà Nẵng','avata'=>'phucloi.jpg'],
            ['name' => 'clubphuonghoang','email'=>'phuonghoang@gmail.com','phone'=>'0364731314','username'=>'CLB Phượng Hoàng','password'=>'phuonghoang12345','address'=>'Ha noi','avata'=>'sanga.jpg'],
            ['name' => 'clukimhang','email'=>'kimhang@gmail.com','phone'=>'0364731313','username'=>'CLB Kim Hằng','password'=>'kimhang12345','address'=>'Hòa Bình','avata'=>'thudo.jpg'],
        ]);
    }
}
