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
        Schema::table('details_sale', function (Blueprint $table) {
            $table->foreign(['products_id'], 'fk_sale_detail-detalle_venta_products1')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['sales_id', 'sales_customers_id'], 'fk_sale_detail-detalle_venta_sales1')->references(['id', 'customers_id'])->on('sales')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('details_sale', function (Blueprint $table) {
            $table->dropForeign('fk_sale_detail-detalle_venta_products1');
            $table->dropForeign('fk_sale_detail-detalle_venta_sales1');
        });
    }
};
