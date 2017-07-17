<?php

use Illuminate\Database\Seeder;

class PublishcompaniesTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('publish_companies')->insert([
          ['id' => 1, 'name' => 'NXB Dân Trí', 'email' => 'nxb_dantri@gmail.com', 'phone' => '0905434534', 'address' => ''],
          ['id' => 2, 'name' => 'NXB Giáo Dục', 'email' => 'nxb_giaoduc@gmail.com', 'phone' => '0903421112', 'address' => ''],
          ['id' => 3, 'name' => 'NXB Chính Trị - Hành Chính', 'email' => 'nxb_chinhtri@gmail.com', 'phone' => '0934545565', 'address' => ''],
          ['id' => 4, 'name' => 'Nhà sách Hoa Sen', 'email' => 'hoasen@gmail.com', 'phone' => '0905434565', 'address' => ''],
          ['id' => 5, 'name' => 'Người Trẻ Việt', 'email' => 'nguoiviettre@gmail.com', 'phone' => '0905434545', 'address' => ''],
          ['id' => 6, 'name' => 'NXB Chính Trị Quốc Gia', 'email' => 'nxb_CT_quocgia@gmail.com', 'phone' => '0905434598', 'address' => ''],
          ['id' => 7, 'name' => 'NS Kiến Thức', 'email' => 'ns_kienthuc@gmail.com', 'phone' => '0905434900', 'address' => ''],
          ['id' => 8, 'name' => 'NXB Phụ Nữ', 'email' => 'nxb_phunu@gmail.com', 'phone' => '0905434655', 'address' => ''],
          ['id' => 9, 'name' => 'NXB Tri thức', 'email' => 'nxb_trithuc@gmail.com', 'phone' => '0905434998', 'address' => ''],
          ['id' => 10, 'name' => 'NXB Văn Hóa Văn Nghệ', 'email' => 'vh_nghethuat@gmail.com', 'phone' => '0905434334', 'address' => ''],
      ]);
    }
}
