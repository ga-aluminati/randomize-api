<?php

use Illuminate\Database\Seeder;

class GroupStatusTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('group_statuses')->insert(
          array(
              'code' => 'ACT',
              'name' => 'Active Match',
              'desc' => 'User was successfully placed into this group',
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('group_statuses')->insert(
          array(
              'code' => 'HIS',
              'name' => 'Historical Match',
              'desc' => 'User was previously matched to this group but an event admin redrew',
              'updated_by' => 'lumen_seeder'
          )
      );
    }
}

?>
