<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('combined_order_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('guest_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->integer('assign_delivery_boy')->nullable();
            $table->longText('shipping_address')->nullable();
            $table->string('shipping_type', 50);
            $table->integer('pickup_point_id')->default(0);
            $table->string('delivery_status', 20)->nullable()->default('pending');
            $table->string('payment_type', 20)->nullable();
            $table->integer('manual_payment')->default(0);
            $table->text('manual_payment_data')->nullable();
            $table->string('payment_status', 20)->nullable()->default('unpaid');
            $table->longText('payment_details')->nullable();
            $table->double('grand_total', 20, 2)->nullable();
            $table->double('coupon_discount', 20, 2)->default(0);
            $table->mediumText('code')->nullable();
            $table->string('tracking_code', 255)->nullable();
            $table->integer('date');
            $table->integer('viewed')->default(0);
            $table->integer('delivery_viewed')->default(1);
            $table->boolean('cancel_request')->default(false);
            $table->dateTime('cancel_request_at')->nullable();
            $table->integer('payment_status_viewed')->nullable()->default(1);
            $table->integer('commission_calculated')->default(0);
            $table->timestamp('delivery_history_date')->useCurrent();
            $table->text('additional_info')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
