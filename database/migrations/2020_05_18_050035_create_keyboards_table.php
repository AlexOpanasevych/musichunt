<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyboards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('width');
            $table->integer('keyboard');
            $table->string('tone_generator');
            $table->integer('polyphony');
            $table->integer('timbres');
            $table->integer('styles');
            $table->string('display');
            $table->integer('compositions');
            $table->boolean('aux_output');
            $table->double('memory');
            $table->integer('power_supply');
            $table->string('type');
            $table->integer('discount');
            $table->string('thumbnail');
            $table->double('cost');
            $table->double('cost_with_discount');
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
        Schema::dropIfExists('keyboards');
    }
}
