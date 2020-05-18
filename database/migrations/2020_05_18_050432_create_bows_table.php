<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bows', function (Blueprint $table) {
            $table->id();
            $table->string('upper_deck');
            $table->string('lower_deck');
            $table->string('shell');
            $table->string('fretboard');
            $table->string('fingerboard');
            $table->string('size');
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
        Schema::dropIfExists('bows');
    }
}
