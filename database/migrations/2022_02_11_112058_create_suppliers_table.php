<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();

            $table->boolean('is_person')->default('false');
            $table->string('name');
            $table->string('surname');
            $table->string('company_name');
            $table->string('fiscal_code');
            $table->string('vat');

            $table->unsignedBigInteger('shipping_address_id')->nullable();
            $table->unsignedBigInteger('billing_address_id')->nullable();

            $table->timestamps();

            $table->foreign('shipping_address_id')->references('id')->on('addresses');
            $table->foreign('billing_address_id')->references('id')->on('addresses');
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('supplier_id')->nullable();

            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('supplier_id');
        });
        Schema::dropIfExists('suppliers');
    }
}
