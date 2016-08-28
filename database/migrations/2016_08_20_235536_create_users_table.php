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
            $table->string('auth0_user_id')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->boolean('email_verified')->default(false);
            $table->string('nickname', 50)->unique()->nullable();
            $table->string('given_name', 50);
            $table->string('family_name', 50)->nullable();
            $table->char('locale', 20)->nullable();
            $table->string('timezone', 50)->nullable();

            // Metadata
            $table->string('updated_by', 100);
            $table->integer('added_by')->unsigned()->nullable();
            $table->dateTimeTz('logged_in_at')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('added_by')->references('id')->on('users');
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
