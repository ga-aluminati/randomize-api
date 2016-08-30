<?php

use Illuminate\Database\Seeder;

class DrawingStatusTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('drawing_statuses')->insert(
          array(
              'code' => 'ACT',
              'name' => 'Active Drawing',
              'desc' => 'Drawing results for an event',
              'updated_by' => 'lumen_seeder',
              'created_at' => date('Y-m-d G:i:s')
          )
      );

      DB::table('drawing_statuses')->insert(
          array(
              'code' => 'HIS',
              'name' => 'Historical Drawing',
              'desc' => 'An admin of the event redrew, new results were generated',
              'updated_by' => 'lumen_seeder',
              'created_at' => date('Y-m-d G:i:s')
          )
      );
    }
}

?>
