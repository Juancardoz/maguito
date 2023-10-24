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
        Schema::create('truck_type', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('upload date', 45);
            $table->string('ability', 45);
            $table->integer('routes_id')->index('fk_truck_type-tipo camion_routes1_idx');
            $table->integer('charge_id')->index('fk_truck_type_charge1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('truck_type');
    }
};
