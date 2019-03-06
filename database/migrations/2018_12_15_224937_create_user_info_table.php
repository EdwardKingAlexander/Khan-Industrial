<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id'); // 
            // sets the foreign constraint to the user
            $table->unsignedInteger('user_id');
       //     $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamps();
            $table->string('ship_to_name', 255)->nullable();
            $table->string('ship_to_street', 255);
            $table->string('ship_to_city', 255);
            $table->string('ship_to_state', 255);
            $table->string('ship_to_zip');
            $table->string('bill_to_street', 255);
            $table->string('bill_to_city', 255);
            $table->string('bill_to_state', 255);
            $table->string('bill_to_zip');
            $table->string('phone', 255);
            $table->string('fax', 255)->nullable();
            $table->string('cell_phone', 255)->nullable();
            $table->boolean('tax_exempt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info');
    }
}
