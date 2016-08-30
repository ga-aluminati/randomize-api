<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
          // Primary key
          $table->increments('id');

          // Table columns
          $table->integer('drawing_id')->unsigned();
          $table->string('name', 100)->nullable();
          $table->mediumText('desc')->nullable();

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
          $table->foreign('drawing_id')->references('id')->on('drawings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('groups');
    }
}
