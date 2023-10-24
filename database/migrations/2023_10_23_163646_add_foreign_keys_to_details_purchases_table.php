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
        Schema::table('details_purchases', function (Blueprint $table) {
            $table->foreign(['bills_id'], 'fk_details_purchases_bills1')->references(['id'])->on('bills')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['puschases_id'], 'fk_details_purchases_puschases1')->references(['id'])->on('puschases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('details_purchases', function (Blueprint $table) {
            $table->dropForeign('fk_details_purchases_bills1');
            $table->dropForeign('fk_details_purchases_puschases1');
        });
    }
};
