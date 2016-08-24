<?php

use Illuminate\Database\Seeder;

class EventTypeTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('event_types')->insert(
          array(
              'code' => 'RDM',
              'name' => 'Random Order',
              'desc' => 'All participants are arranged in random order',
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('event_types')->insert(
          array(
              'code' => 'GRP',
              'name' => 'Group Event',
              'desc' => 'Users are matched into groups of 2 or more',
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('event_types')->insert(
          array(
              'code' => 'SEC',
              'name' => 'Secret Santa',
              'desc' => 'Users are matched into pairs, matches are hidden from everyone else until the event is closed',
              'updated_by' => 'lumen_seeder'
          )
      );
    }
}

?>
