<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaykuTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payku_transactions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('status')->nullable();
            $table->string('order')->nullable()->unique();
            $table->string('email')->nullable();
            $table->string('subject')->nullable();
            $table->text('url')->nullable();
            $table->unsignedInteger('amount')->nullable();
            $table->dateTime('notified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payku_transactions');
    }
}
