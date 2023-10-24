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
        Schema::create('charge_has_returns', function (Blueprint $table) {
            $table->string('product', 45);
            $table->string('amount', 45)->nullable();
            $table->string('observations', 45)->nullable();
            $table->integer('charge_id')->index('fk_charge_has_returns_charge1_idx');
            $table->integer('returns_id')->index('fk_charge_has_returns_returns1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charge_has_returns');
    }
};
