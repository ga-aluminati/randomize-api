<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSortPrioritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sort_priorities', function (Blueprint $table) {
          // Primary key
          $table->char('code', 3);
          $table->primary('code');

          // Table columns
          $table->string('name', 50);
          $table->mediumText('desc')->nullable();

          // Metadata
          $table->string('updated_by', 100);
          $table->timestamps();

          // Foreign keys
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sort_priorities');
    }
}
