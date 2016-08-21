<?php

use Illuminate\Database\Seeder;

class RelationshipTypeTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('relationship_types')->insert(
          array(
              'code' => 'ACT',
              'name' => 'Active Match',
              'desc' => 'User was successfully placed into this group',
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('relationship_types')->insert(
          array(
              'code' => 'HIS',
              'name' => 'Historical Match',
              'desc' => 'User was previously matched to this group but event organizer redrew',
              'updated_by' => 'lumen_seeder'
          )
      );
    }
}

?>
