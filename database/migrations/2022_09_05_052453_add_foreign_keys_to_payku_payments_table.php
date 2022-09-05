<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaykuPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payku_payments', function (Blueprint $table) {
            $table->foreign(['transaction_id'])->references(['id'])->on('payku_transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payku_payments', function (Blueprint $table) {
            $table->dropForeign('payku_payments_transaction_id_foreign');
        });
    }
}
