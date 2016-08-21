<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_groups', function (Blueprint $table) {
          // Primary key
          $table->integer('event_id')->unsigned();
          $table->integer('group_id')->unsigned();

          $table->primary(['event_id', 'group_id']);

          // Table columns

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('event_id')->references('id')->on('events');
          $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_groups');
    }
}
