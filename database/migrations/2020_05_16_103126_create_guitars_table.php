<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuitarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guitars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('size');
            $table->string('upper_deck');
            $table->string('lower_deck');
            $table->string('shell');
            $table->string('vulture');
            $table->string('fingerboard');
            $table->string('number_of_strings');
            $table->string('type');
            $table->integer('discount');
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
        Schema::dropIfExists('guitars');
    }
}
