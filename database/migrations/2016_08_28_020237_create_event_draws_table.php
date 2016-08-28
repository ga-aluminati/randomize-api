<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventDrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_draws', function (Blueprint $table) {
          // Primary key
          $table->increments('id');

          // Table columns
          $table->integer('event_id')->unsigned();
          $table->integer('drawn_by')->unsigned();

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('event_id')->references('id')->on('events');
          $table->foreign('drawn_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_draws');
    }
}
