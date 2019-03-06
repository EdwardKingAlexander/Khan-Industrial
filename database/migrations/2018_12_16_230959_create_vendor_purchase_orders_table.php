<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use PhpParser\Node\NullableType;

class CreateVendorPurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_purchase_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vendor_id');
            $table->unsignedInteger('order_number');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('vendor_purchase_order_number');
            $table->unsignedInteger('customer_purchase_order_number')->nullable();
            $table->boolean('orders_shipped');
            $table->boolean('order_received');
            $table->string('received_by', 255)->nullable();
            $table->timestamp('due_date');
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
        Schema::dropIfExists(' vendor_purchase_orders');
    }
}
