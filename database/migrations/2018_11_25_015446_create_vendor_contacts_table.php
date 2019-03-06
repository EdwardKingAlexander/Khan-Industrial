<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_contacts', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('vendor_id');
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('phone');
            $table->string('email', 255);
            $table->string('fax');
            $table->string('ship_to_street_address', 255);
            $table->string('ship_to_city', 50);
            $table->string('ship_to_state', 32);
            $table->string('ship_to_zip');
            $table->string('bill_to_address', 255);
            $table->string('bill_to_city', 50);
            $table->string('bill_to_state', 32);
            $table->string('bill_to_zip');
            $table->unsignedInteger('terms_id')->default(1);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_contacts');
    }
}
