<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winds', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->string('color');
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
        Schema::dropIfExists('winds');
    }
}
