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
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('id');
            $table->string('company_name', 45);
            $table->string('customer_name', 45);
            $table->string('location', 45);
            $table->string('phone', 45);
            $table->string('mail', 45);
            $table->string('method_payment', 45);
            $table->integer('customers_id');
            $table->integer('customers_id1')->index('fk_sales_customers1_idx');

            $table->primary(['id', 'customers_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
