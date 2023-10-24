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
        Schema::create('details_sale', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('description', 45);
            $table->string('amount', 45);
            $table->string('price_unit', 45);
            $table->string('price_total', 45);
            $table->integer('sales_id');
            $table->integer('sales_customers_id');
            $table->integer('products_id')->index('fk_sale_detail-detalle_venta_products1_idx');

            $table->index(['sales_id', 'sales_customers_id'], 'fk_sale_detail-detalle_venta_sales1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_sale');
    }
};
