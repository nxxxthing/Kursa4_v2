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
            $table->dateTime("created_time");
            $table->string("departure");
            $table->string("destination");

            $table->BigInteger("client_id")->unsigned();
            $table->foreign("client_id")->references("id")->on("clients");

            $table->BigInteger("driver_id")->unsigned();
            $table->foreign("driver_id")->references("id")->on("drivers");

            $table->string("status");
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
