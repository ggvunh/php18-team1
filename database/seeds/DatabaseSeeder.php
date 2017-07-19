<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TopicsTableSeerder::class);
         $this->call(AuthorsTableSeerder::class);
         $this->call(PublishcompaniesTableSeerder::class);
         $this->call(UsersTableSeeder::class);
    }
}
