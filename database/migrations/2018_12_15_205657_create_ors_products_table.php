<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ors_products', function (Blueprint $table) {
            


            // general item descriptors 
            $table->increments('id')->unique(); // primary key
            $table->unsignedInteger('vendor_id')->default(1);
            $table->unsignedInteger('subcategories_id');
            $table->unsignedInteger('brands_id');
            $table->string('part_number');
            $table->string('prefix', 3);
            $table->string('item_description', 255);
            
            // selling parameters
            $table->unsignedInteger('minimum_order_quantity');
            $table->unsignedInteger('minimum_selling_quantity');
            $table->string('standard_unit_measure', 8); // CT CA CAN EA GA etc..
            $table->unsignedInteger('std_package_quantity');
            $table->string('price_unit', 5); // EA each BX vox GA gallon BOX vox CT carton DZ PR PK etc
            
            
            
            // sell and cost attributes
            $table->double('list_price', 30); // 39.395
            $table->double('your_ors_nasco_cost', 30); // 57.404
            $table->double('your_promo_cost', 30)->nullable(); // 12.245
            
            
            // Promo pricing dates
            $table->date('promo_start_date', 16)->nullable();	// 10/01/18 ||   // for not on sale
            $table->date('promo_end_date', 16)->nullable();
            
            // dimensional attributes
            $table->double('item_weight', 16);
            $table->double('item_height', 16);
            $table->double('item_width', 16);
            $table->double('item_length', 16);
            $table->double('item_cube', 16)->nullable();
            
            
            // extra product attributes
            $table->unsignedInteger('upc_code');
            $table->unsignedInteger('unspsc_code');
            $table->string('hazmat_Item', 1)->nullable();
            $table->string('orm_item', 1);
            $table->string('ansi_stock_uom_code', 4);
            $table->string('ansi_pricing_or_selling_uom_code', 4);
            $table->string('ansi_std_pkg_uom_code', 4);
            $table->string('country_of_origin', 255)->nullable();

            // inventory checks 
            $table->string('Stocked_Birmingham_AL', 1)->nullable();
            $table->string('Stocked_Chicago_IL', 1)->nullable();
            $table->string('Stocked_Charlotte_NC', 1)->nullable();
            $table->string('Stocked_Cincinnati_OH', 1)->nullable();
            $table->string('Stocked_Dallas_TX', 1)->nullable();
            $table->string('Stocked_Denver_CO', 1)->nullable();
            $table->string('Stocked_Harrisburg_PA', 1)->nullable();
            $table->string('Stocked_Houston_TX', 1)->nullable();
            $table->string('Stocked_St_Paul_MN', 1)->nullable();
            $table->string('Stocked_Muskogee_OK', 1)->nullable();
            $table->string('Stocked_Orlando_FL', 1)->nullable();
            $table->string('Stocked_Portland_OR', 1)->nullable();
            $table->string('Stocked_Bakersfield_CA', 1)->nullable();

            // Image Sources
            $table->string('image_url', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ors_products');
    }
}
