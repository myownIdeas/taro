<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant', function (Blueprint $table) {
            $table->id();
            $table->string('x_customer_first_name');
            $table->string('x_customer_last_name');
            $table->string('x_customer_shipping_address1');
            $table->string('x_customer_email');
            $table->string('x_customer_shipping_city');
            $table->string('x_currency');
            $table->string('x_amount');
            $table->string('x_account_id');
            $table->string('x_reference');
            $table->string('x_test');
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
        Schema::dropIfExists('merchant');
    }
}
