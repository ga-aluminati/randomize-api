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
        $this->call('EventStatusTableSeeder');
        $this->call('EventTypeTableSeeder');
        $this->call('GroupStatusTableSeeder');
        $this->call('SortPriorityTableSeeder');

        // $this->call('UserTableSeeder');
    }
}
