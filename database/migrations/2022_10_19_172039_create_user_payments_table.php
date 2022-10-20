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
        Schema::create('user_payments', function (Blueprint $table) {
            $table->id();

            $table->string('id_request');
            $table->string('id_user');
            $table->string('date_generate');
            $table->string('payment_number');
            $table->string('status');
            $table->string('id_trasaction');
            $table->string('sell_reference');
            $table->string('transaction_reference');
            $table->string('bank');
            $table->string('val');
            $table->string('currency');
            $table->string('entity');
            $table->string('extra1');
            $table->string('extra2');

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
        Schema::dropIfExists('user_payments');
    }
};
