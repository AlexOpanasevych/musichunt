<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->bigInteger('instrument_id');
            $table->integer('count');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->bigInteger('user_id');
            $table->string('type');
            $table->string('address');
            $table->string('payment_method');
            $table->string('delivery_method');
            $table->integer('post_index');
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
        Schema::dropIfExists('orders');
    }
}
