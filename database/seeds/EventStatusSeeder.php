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
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('event_statuses')->insert(
          array(
              'code' => 'DRW',
              'name' => 'Matches Drawn',
              'desc' => 'Drawing has taken place',
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('event_statuses')->insert(
          array(
              'code' => 'CLS',
              'name' => 'Closed Event',
              'desc' => 'Event is closed',
              'updated_by' => 'lumen_seeder'
          )
      );
    }
}

?>
