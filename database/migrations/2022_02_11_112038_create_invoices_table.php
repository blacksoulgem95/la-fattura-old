<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('invoice_date')->nullable();
            $table->string('sequential');
            $table->string('notes')->nullable();
            $table->dateTimeTz('due_date');
            $table->unsignedBigInteger('customer_id');

            $table->dateTimeTz('scheduled_send_day')->nullable();
            $table->boolean('sent')->default(false);

            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
