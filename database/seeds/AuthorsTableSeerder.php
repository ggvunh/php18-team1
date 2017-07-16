<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('authors')->insert([
          ['id' => 1, 'name' => 'ALBERT EINSTEIN', 'email' => 'EINSTEIN@gmail.com', 'phone' => '0902006667', 'address' => '', 'story' => ''],
          ['id' => 2, 'name' => 'Alistair Maclean', 'email' => 'Alistair@gmail.com', 'phone' => '0906009977', 'address' => '', 'story' => ''],

          ['id' => 3, 'name' => 'AKIRA TORIYAMA', 'email' => 'TORIYAMA@gmail.com', 'phone' => '0956778899', 'address' => '', 'story' => ''],

          ['id' => 4, 'name' => 'BRENT SCHLENDER', 'email' => 'SCHLENDER@gmail.com', 'phone' => '0905221122', 'address' => '', 'story' => ''],

          ['id' => 5, 'name' => 'Huyền Chip', 'email' => 'huyenchip@gmail.com', 'phone' => '0903885566', 'address' => '', 'story' => ''],

          ['id' => 6, 'name' => 'Võ Văn Thành', 'email' => 'thanhvo@gmail.com', 'phone' => '0990556677', 'address' => '', 'story' => ''],

          ['id' => 7, 'name' => 'Nguyễn Thị Hồng Vân', 'email' => 'hongvan@gmail.com', 'phone' => '0903734504', 'address' => '', 'story' => ''],

          ['id' => 8, 'name' => 'Nguyễn Đức Mậu', 'email' => 'ducmau@gmail.com', 'phone' => '0909834534', 'address' => '', 'story' => ''],
          ['id' => 9, 'name' => 'Thích Nhất Hạnh', 'email' => 'hanh@gmail.com', 'phone' => '0906454534', 'address' => '', 'story' => ''],
          ['id' => 10, 'name' => 'Đỗ Thanh Tịnh', 'email' => 'thanhtinh@gmail.com', 'phone' => '0923434534', 'address' => '', 'story' => ''],
      ]);
    }
}
