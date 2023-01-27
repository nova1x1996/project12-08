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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->double('total');
            $table->integer('payment');
            $table->integer('status');
            $table->integer('ship')->default(0);
            $table->string('phone');
            $table->unsignedBigInteger("discount_id")->nullable();
            $table->foreign('discount_id')->references('id')->on("discounts");
            $table->unsignedBigInteger("customer_id")->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');
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
};
