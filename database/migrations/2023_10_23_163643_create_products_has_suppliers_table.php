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
        Schema::create('products_has_suppliers', function (Blueprint $table) {
            $table->integer('products_id')->index('fk_products-productos_has_suppliers-proveedores_products1_idx');
            $table->integer('suppliers_id')->index('fk_products-productos_has_suppliers-proveedores_suppliers1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_has_suppliers');
    }
};
