<?php

use Illuminate\Database\Seeder;

class TopicsTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            ['id' => 1, 'name' => 'Truyen Tranh'],
            ['id' => 2, 'name' => 'Van Hoa'],
            ['id' => 3, 'name' => 'Nghe Thuat'],
            ['id' => 4, 'name' => 'Cong Nghe'],
            ['id' => 5, 'name' => 'Kinh Te'],
            ['id' => 6, 'name' => 'Ngoai Ngu'],
            ['id' => 7, 'name' => 'Du Lich'],
            ['id' => 8, 'name' => 'Am Nhac'],
            ['id' => 9, 'name' => 'My Thuat'],
            ['id' => 10, 'name' => 'Ton Giao'],
        ]);
    }
}
