<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('users')->insert(
          array(
              'email' => 'john@test.com',
              'nickname' => 'johndoe',
              'given_name' => 'John',
              'family_name' => 'Doe',
              'updated_by' => 'lumen_seeder'
          )
      );

      DB::table('users')->insert(
          array(
              'email' => 'jane@test.com',
              'nickname' => 'janedoe',
              'given_name' => 'Jane',
              'family_name' => 'Doe',
              'updated_by' => 'lumen_seeder'
          )
      );
    }
}

?>
