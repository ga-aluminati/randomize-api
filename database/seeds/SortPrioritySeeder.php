<?php

use Illuminate\Database\Seeder;

class SortPriorityTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('sort_priorities')->insert(
          array(
              'code' => 'GRP',
              'name' => 'Group Priority',
              'desc' => 'Determine best way to randomize based on number of groups requested',
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('sort_priorities')->insert(
          array(
              'code' => 'IND',
              'name' => 'Individual Priority',
              'desc' => 'Determine best way to randomize based on number of people per group',
              'updated_by' => 'lumen_seeder'
          )
      );

    }
}

?>
