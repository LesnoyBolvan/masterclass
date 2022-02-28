<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('token', 255)->nullable(false)->unique();
            $table->string('password', 255)->nullable(false);
            $table->string('email', 255)->nullable(false)->unique();
            $table->string('phone', 16)->nullable(false)->unique();
            $table->string('last_name', 64)->nullable(true);
            $table->string('first_name', 64)->nullable(true);
            $table->boolean('is_admin')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
