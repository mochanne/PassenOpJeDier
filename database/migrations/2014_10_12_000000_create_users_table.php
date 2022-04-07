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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->default('/cdn/native/img/avatar/default.png');
            $table->boolean('admin')->default(false);
            $table->boolean('blocked')->default(false);
            $table->string('password');
            // $table->foreignId('home_id')->nullable()->references('id')->on('homes');
            // $table->foreign('home_id')->references('id')->on('homes');
            $table->timestamps();
            $table->rememberToken();
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
