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
        Schema::create('detail_invoice', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('descriptionl', 45);
            $table->string('amount', 45);
            $table->string('unit_value', 45);
            $table->string('total value', 45);
            $table->integer('bills_id')->index('fk_detail_invoice_bills1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_invoice');
    }
};
