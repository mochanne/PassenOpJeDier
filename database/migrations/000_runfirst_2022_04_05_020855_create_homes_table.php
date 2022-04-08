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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('owner_id')->references('id')->on('users'); // oops! circular foreign keys break everything!
            $table->boolean('discarded')->default(false);
            $table->foreignId('owner_id'); // oops! circular foreign keys break everything!
            $table->string('allowed_pet_types')->default('all'); // this is left as a plain string so we can do custom string parsing, like 'cat+dog+turtle' or 'cat' or 'cat+turtle'
            $table->string('location'); // physical adress/regio
            $table->string('media')->default('/cdn/native/img/homes/no_home.png'); // picture
            $table->text('description')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homes');
    }
};
