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
        Schema::table('products_has_suppliers', function (Blueprint $table) {
            $table->foreign(['products_id'], 'fk_products-productos_has_suppliers-proveedores_products1')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['suppliers_id'], 'fk_products-productos_has_suppliers-proveedores_suppliers1')->references(['id'])->on('suppliers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_has_suppliers', function (Blueprint $table) {
            $table->dropForeign('fk_products-productos_has_suppliers-proveedores_products1');
            $table->dropForeign('fk_products-productos_has_suppliers-proveedores_suppliers1');
        });
    }
};
