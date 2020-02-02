<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();;
            $table->string('city')->nullable();;
            $table->string('postcode')->nullable();;
            $table->string('postaladdress')->nullable();;
            $table->string('delivery_city')->nullable();;
            $table->string('delivery_postcode')->nullable();;
            $table->string('delivery_postaladdress')->nullable();;
            $table->string('isEnable')->nullable();;
            $table->string('isVerification')->nullable();;
            $table->string('isNewsLetter')->nullable();;
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('customers');
    }
}
