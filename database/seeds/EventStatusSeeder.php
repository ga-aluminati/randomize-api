<?php

use Illuminate\Database\Seeder;

class EventStatusTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('event_statuses')->insert(
          array(
              'code' => 'PND',
              'name' => 'Pending Event',
              'desc' => 'Waiting for guests to join',
              'updated_by' => 'lumen_seeder',
              'created_at' => date('Y-m-d G:i:s')
          )
      );

      DB::table('event_statuses')->insert(
          array(
              'code' => 'DRW',
              'name' => 'Matches Drawn',
              'desc' => 'Drawing has taken place',
              'updated_by' => 'lumen_seeder',
              'created_at' => date('Y-m-d G:i:s')
          )
      );

      DB::table('event_statuses')->insert(
          array(
              'code' => 'CLS',
              'name' => 'Closed Event',
              'desc' => 'With Secret Santa, a closed event reveals all the matches on the page',
              'updated_by' => 'lumen_seeder',
              'created_at' => date('Y-m-d G:i:s')
          )
      );

      DB::table('event_statuses')->insert(
          array(
              'code' => 'REM',
              'name' => 'Removed Event',
              'desc' => 'Event has been removed by an admin',
              'updated_by' => 'lumen_seeder',
              'created_at' => date('Y-m-d G:i:s')
          )
      );
    }
}

?>
