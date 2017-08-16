<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		['id' => 9, 'name' => 'admin', 'email' => 'abc123@gmail.com', 'password' => bcrypt('123456'), 'phone' => '0123456786', 'address' => 'Quảng Nam', 'is_admin' => true],
    		['id' => 10, 'name' => 'VanMinh', 'email' => 'abc1234@gmail.com', 'password' => bcrypt('123456'), 'phone' => '0123456787', 'address' => 'Quảng Nam', 'is_admin' => false],
    		['id' => 11, 'name' => 'PhuQuang', 'email' => 'abc12345@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '0123456788', 'address' => 'Quảng Nam', 'is_admin' => false],
    		['id' => 12, 'name' => 'NgocAnh', 'email' => 'abc123456@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 13, 'name' => 'Lê Hoàng', 'email' => 'hoang@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 14, 'name' => 'Minh Ngọc', 'email' => 'ngoc123456@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 15, 'name' => 'Văn Lê', 'email' => 'vanle123456@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 16, 'name' => 'Ngọc Châu', 'email' => 'chau123456@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 17, 'name' => 'My Kim', 'email' => 'kim23456@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 18, 'name' => 'Ngoc Hung', 'email' => 'hung23456@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 19, 'name' => 'Ngoc Hoang', 'email' => 'hoang56@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
            ['id' => 20, 'name' => 'Mai Anh', 'email' => 'anh456@gmail.com', 'password' =>  bcrypt('123456'), 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
    ]);
}
}