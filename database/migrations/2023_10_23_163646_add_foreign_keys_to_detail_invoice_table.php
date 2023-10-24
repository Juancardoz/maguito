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
        Schema::table('detail_invoice', function (Blueprint $table) {
            $table->foreign(['bills_id'], 'fk_detail_invoice_bills1')->references(['id'])->on('bills')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_invoice', function (Blueprint $table) {
            $table->dropForeign('fk_detail_invoice_bills1');
        });
    }
};
