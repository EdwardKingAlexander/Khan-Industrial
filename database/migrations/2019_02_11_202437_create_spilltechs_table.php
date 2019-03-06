<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpilltechsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spilltechs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vendor_id')->default(2);
            $table->string('series');
            $table->string('part_number');
            $table->string('description');
            $table->string('size');
            $table->integer('units_per_package');
            $table->double('gallons_absorbered_per_package');
            $table->double('ship_weight');
            $table->integer('quantity_per_pallet');
            $table->double('cost');
            $table->double('sell_price');
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
        Schema::dropIfExists('spilltechs');
    }
}
