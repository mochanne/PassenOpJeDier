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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_id')->references('id')->on('homes');
            $table->foreignId('offer_id')->references('id')->on('offers');

            $table->foreignId('homeowner_id')->references('id')->on('users');
            $table->foreignId('petowner_id')->references('id')->on('users');

            // $table->dateTime('proposed_on')->nullable;
            $table->dateTime('completed_on')->nullable();

            // $table->boolean('started_by_petowner')->default(false);
            $table->boolean('petowner_accepted')->default(false);
            $table->boolean('homeowner_accepted')->default(false);
            $table->boolean('discarded')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};
