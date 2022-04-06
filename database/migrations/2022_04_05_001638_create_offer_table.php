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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('pet_name');
            $table->string('pet_type');
            $table->text('description')->default('');
            $table->double('wage',7,2);
            $table->string('location');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->foreignId('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->string('state')->default('open');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
