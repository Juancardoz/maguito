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
        Schema::create('details_purchases', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('batch', 45);
            $table->string('date_of_purchase', 45);
            $table->string('unit_value', 45);
            $table->integer('bills_id')->index('fk_details_purchases_bills1_idx');
            $table->integer('puschases_id')->index('fk_details_purchases_puschases1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_purchases');
    }
};
