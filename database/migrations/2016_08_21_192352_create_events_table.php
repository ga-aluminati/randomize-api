<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
          // Primary key
          $table->increments('id');

          // Table columns
          $table->integer('creator_id')->unsigned();
          $table->string('name', 100);
          $table->mediumText('desc')->nullable();
          $table->dateTimeTz('start_at')->nullable();
          $table->dateTimeTz('end_at')->nullable();
          $table->dateTimeTz('draw_at')->nullable();
          $table->boolean('private')->default(false);
          $table->char('secret', 40)->nullable();
          $table->string('display_code')->unique()->nullable();
          $table->char('event_type_code', 3)->default('GRP');
          $table->char('event_status_code', 3)->default('PND');

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('creator_id')->references('id')->on('users');
          $table->foreign('event_type_code')->references('code')->on('event_types');
          $table->foreign('event_status_code')->references('code')->on('event_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
