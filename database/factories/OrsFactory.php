<?php

use Faker\Generator as Faker;

$factory->define(App\OrsNasco::class, function (Faker $faker) {
    return [

        'vendor_id' => 1,
        'subcategory_id' => $faker->numberBetween($min = 1, $max = 10),
        'brands_id' => $faker->numberBetween($min = 1, $max = 30),
        'part_number' => $faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->numerify('###-###'),
        'prefix' => $faker->randomElement($array = array('mtx', 'skf', 'pep', 'dal', 'jur', 'fla', 'ntn', 'dew')),
        'item_description' => $faker->sentence,
        'minimum_order_quantity' => $faker->numberBetween($min = 1, $max = 5),
        'minimum_selling_quantity' => $faker->numberBetween($min = 1, $max = 5),
        'standard_unit_measure' => $faker->randomElement($array = array('ct', 'ca', 'ea', 'kt', 'pk', 'rl', 'bx')),
        'std_package_quantity' => $faker->numberBetween($min = 1, $max = 1000),
        'price_unit' => $faker->randomElement($array = array('ct', 'ca', 'ea', 'kt', 'pk', 'rl', 'bx')),
        'list_price' => $faker->numerify('###.##'),
        'your_ors_nasco_cost' => $faker->numerify('##.##'),
        'your_promo_cost' => null,
        'promo_start_date' => null,
        'promo_end_date' => null,
        'item_weight' => $faker->numerify('##.##'),
        'item_height' => $faker->numerify('##.##'),
        'item_width' => $faker->numerify('##.##'),
        'item_length' => $faker->numerify('##.##'),
        'item_cube' => $faker->numerify('##.##'),
        'upc_code' => $faker->numerify('#########'),
        'unspsc_code' => $faker->numerify('##.##'),
        'hazmat_Item' => $faker->randomElement($array = array('y', 'n')),
        'orm_item' => $faker->randomElement($array = array('y', 'n')),
        'ansi_stock_uom_code' => $faker->randomElement($array = array('each', 'box', 'drum')),
        'ansi_pricing_or_selling_uom_code' => $faker->randomElement($array = array('each', 'box', 'drum')),
        'ansi_std_pkg_uom_code' => $faker->randomElement($array = array('each', 'box', 'drum')),
        'country_of_origin' => $faker->randomElement($array = array('USA', 'China', 'India', 'Mexico', 'Japan', 'Canada', 'Sweden')),
        'Stocked_Birmingham_AL' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Chicago_IL' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Charlotte_NC' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Cincinnati_OH' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Dallas_TX' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Denver_CO' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Harrisburg_PA' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Houston_TX' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_St_Paul_MN' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Muskogee_OK' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Orlando_FL' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Portland_OR' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'Stocked_Bakersfield_CA' => $faker->randomElement($array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', null)),
        'image_url' => $faker->imageUrl($width = 200, $height = 200, 'cats')

    ];

});
