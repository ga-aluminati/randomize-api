<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Primary key
            $table->increments('id');

            // Table columns
            $table->string('email')->unique()->nullable();
            $table->string('nickname', 50)->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('given_name', 50);
            $table->string('family_name', 50)->nullable();
            $table->boolean('confirmed')->default(false);
            $table->char('locale', 20)->nullable();
            $table->string('timezone', 50)->nullable();

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
        Schema::drop('users');
    }
}
