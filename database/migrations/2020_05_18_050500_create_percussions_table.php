<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePercussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percussions', function (Blueprint $table) {
            $table->id();
            $table->string('size');
            $table->string('material');
            $table->string('type');
            $table->string('color');
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
        Schema::dropIfExists('percussions');
    }
}
