<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->unique('user_id');
            $table->integer('seller_package_id')->nullable();
            $table->integer('remaining_uploads')->default(0);
            $table->integer('remaining_digital_uploads')->default(0);
            $table->date('invalid_at')->nullable();
            $table->integer('remaining_auction_uploads')->nullable()->default(0);
            $table->double('rating', 3, 2)->default(0);
            $table->integer('num_of_reviews')->default(0);
            $table->integer('num_of_sale')->default(0);
            $table->integer('verification_status')->default(0);
            $table->longText('verification_info')->nullable();
            $table->integer('cash_on_delivery_status')->default(0);
            $table->double('admin_to_pay', 20, 2)->default(0);
            $table->string('bank_name', 255)->nullable();
            $table->string('bank_acc_name', 200)->nullable();
            $table->string('bank_acc_no', 50)->nullable();
            $table->integer('bank_routing_no')->nullable();
            $table->integer('bank_payment_status')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
