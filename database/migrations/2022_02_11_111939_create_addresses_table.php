<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('country');
            $table->string('county');
            $table->string('zip');
            $table->string('line_1');
            $table->string('line_2');

            $table->unsignedBigInteger('created_by_user_id');
            $table->unsignedBigInteger('customer_id')->nullable();

            $table->timestamps();

            $table->foreign('created_by_user_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');
        });

        Schema::table('customers', function (Blueprint $table) {

            $table->unsignedBigInteger('billing_address_id')->nullable();
            $table->unsignedBigInteger('shipping_address_id')->nullable();

            $table->foreign('billing_address_id')->references('id')->on('addresses');
            $table->foreign('shipping_address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {

            $table->dropColumn('billing_address_id');
            $table->dropColumn('shipping_address_id');

        });

        Schema::dropIfExists('addresses');
    }
}
