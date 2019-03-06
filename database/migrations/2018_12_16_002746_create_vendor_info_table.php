<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_info', function (Blueprint $table) {
            $table->increments('id');


            $table->unsignedInteger('vendor_id');
          //  $table->foreign('vendor_id')->references('vendor_id')->on('vendors');
            $table->string('company_name');
            $table->string('fax_for_ordering', 255)->nullable();
            $table->string('fax_for_accounts_payable', 255)->nullable();
            $table->string('fax_for_accounts_recievables', 255)->nullable();
            $table->string('phone_for_ordering', 255);
            $table->string('phone_for_accounts_payable', 255);
            $table->string('phone_for_accounts_recievables', 255);
            $table->string('email_for_ordering', 255);
            $table->string('email_for_accounts_payable', 255);
            $table->string('email_for_accounts_receivables', 255);
            $table->string('bill_to_name', 255);
            $table->string('bill_to_street', 255);
            $table->string('bill_to_city', 255);
            $table->string('bill_to_state', 255);
            $table->string('bill_to_zip');
            $table->unsignedInteger('payment_terms_id');
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
        Schema::dropIfExists('vendor_info');
    }
}
