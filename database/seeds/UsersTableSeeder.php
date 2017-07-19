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
    		['id' => 1, 'name' => 'admin', 'email' => 'abc123@gmail.com', 'password' => '123456', 'phone' => '0123456786', 'address' => 'Quảng Nam', 'is_admin' => true],
    		['id' => 2, 'name' => 'VanMinh', 'email' => 'abc1234@gmail.com', 'password' => '123456', 'phone' => '0123456787', 'address' => 'Quảng Nam', 'is_admin' => false],
    		['id' => 3, 'name' => 'PhuQuang', 'email' => 'abc12345@gmail.com', 'password' => '123456', 'phone' => '0123456788', 'address' => 'Quảng Nam', 'is_admin' => false],
    		['id' => 4, 'name' => 'NgocAnh', 'email' => 'abc123456@gmail.com', 'password' => '123456', 'phone' => '01234567899', 'address' => 'Quảng Nam', 'is_admin' => false],
    ]);
}
}