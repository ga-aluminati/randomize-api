<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drawings', function (Blueprint $table) {
          // Primary key
          $table->increments('id');

          // Table columns
          $table->integer('event_id')->unsigned();
          $table->integer('drawn_by')->unsigned();
          $table->char('drawing_status_code', 3)->default('ACT');
          $table->char('event_type_code', 3);
          $table->char('sort_priority_code', 3)->nullable();
          $table->smallInteger('sort_priority_num')->nullable();

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('event_id')->references('id')->on('events');
          $table->foreign('drawn_by')->references('id')->on('users');
          $table->foreign('drawing_status_code')->references('code')->on('drawing_statuses');
          $table->foreign('event_type_code')->references('code')->on('event_types');
          $table->foreign('sort_priority_code')->references('code')->on('sort_priorities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('drawings');
    }
}
