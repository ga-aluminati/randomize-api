<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_participants', function (Blueprint $table) {
          // Primary key
          $table->integer('participant_id')->unsigned();
          $table->integer('group_id')->unsigned();

          $table->primary(['participant_id', 'group_id']);

          // Table columns
          $table->integer('match_id')->unsigned()->nullable();

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('participant_id')->references('id')->on('participants');
          $table->foreign('group_id')->references('id')->on('groups');
          $table->foreign('match_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('group_participants');
    }
}
