<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();

            $table->text('description')->nullable();
            $table->double('amount');
            $table->dateTimeTz('invoice_date');
            $table->dateTimeTz('due_date');
            $table->dateTimeTz('payment_date')->nullable();
            $table->text('file_location')->nullable();
            $table->string('invoice_number');
            $table->unsignedBigInteger('supplier_id');

            $table->timestamps();

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
        Schema::dropIfExists('expenses');
    }
}
