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
        Schema::table('charge_has_returns', function (Blueprint $table) {
            $table->foreign(['charge_id'], 'fk_charge_has_returns_charge1')->references(['id'])->on('charge')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['returns_id'], 'fk_charge_has_returns_returns1')->references(['id'])->on('returns')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('charge_has_returns', function (Blueprint $table) {
            $table->dropForeign('fk_charge_has_returns_charge1');
            $table->dropForeign('fk_charge_has_returns_returns1');
        });
    }
};
