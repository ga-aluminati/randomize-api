<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_admins', function (Blueprint $table) {
          // Primary key
          $table->integer('event_id')->unsigned();
          $table->integer('admin_id')->unsigned();

          $table->primary(['event_id', 'admin_id']);

          // Table columns

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('event_id')->references('id')->on('events');
          $table->foreign('admin_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_admins');
    }
}
