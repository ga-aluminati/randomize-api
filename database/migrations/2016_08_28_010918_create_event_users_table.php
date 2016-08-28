<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_users', function (Blueprint $table) {
          // Primary key
          $table->integer('event_id')->unsigned();
          $table->integer('user_id')->unsigned();

          $table->primary(['event_id', 'user_id']);

          // Table columns
          $table->smallInteger('display_seq')->nullable();

          // Metadata
          $table->string('updated_by', 100);
          $table->integer('removed_by')->unsigned()->nullable();
          $table->dateTimeTz('removed_at')->nullable();
          $table->timestamps();

          // Foreign keys
          $table->foreign('event_id')->references('id')->on('events');
          $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('event_users');
    }
}
