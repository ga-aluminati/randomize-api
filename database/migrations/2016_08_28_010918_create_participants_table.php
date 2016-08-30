<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
          // Primary key
          $table->increments('id');

          // Table columns
          $table->integer('event_id')->unsigned();
          $table->integer('user_id')->unsigned()->nullable();
          $table->string('display_name');

          // Metadata
          $table->string('updated_by', 100);
          $table->integer('added_by')->unsigned()->nullable();
          $table->integer('removed_by')->unsigned()->nullable();
          $table->dateTimeTz('removed_at')->nullable();
          $table->timestamps();

          // Foreign keys
          $table->foreign('event_id')->references('id')->on('events');
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('added_by')->references('id')->on('users');
          $table->foreign('removed_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participants');
    }
}
