<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_users', function (Blueprint $table) {
          // Primary key
          $table->integer('user_id')->unsigned();
          $table->integer('group_id')->unsigned();

          $table->primary(['user_id', 'group_id']);

          // Table columns
          $table->integer('match_id')->unsigned()->nullable();
          $table->char('relationship_type_code', 3)->default('ACT');

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('group_id')->references('id')->on('groups');
          $table->foreign('match_id')->references('id')->on('users');
          $table->foreign('relationship_type_code')->references('code')->on('relationship_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('group_users');
    }
}
