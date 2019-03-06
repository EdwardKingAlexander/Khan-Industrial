<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracked_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id'); // references order_id on orders table
            $table->string('received_by');
            $table->timestamp('date_ordered')->nullable();
            $table->timestamp('date_shipped')->nullable();
            $table->timestamp('date_received')->nullable();
            $table->boolean('order_shipped');
            $table->boolean('order_received');
            $table->boolean('partial');
            $table->boolean('full_shipped');
            $table->boolean('full_recieved');
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
        Schema::dropIfExists('tracked_orders');
    }
}
