<?php

use Faker\Generator as Faker;

$factory->define(App\Spilltech::class, function (Faker $faker) {
    return [
        'vendor_id' => 2,
        'series' => $faker->randomElement($array = array('AirLaid', 'Arrestor', 'Commander', 'Contractor Grade', 'Defender', 'Industrial Mats', 'Kits', 'Loose', 'Material Handling', 'Maximizer', 'Pans', 'Pillows', 'Protector', 'Responder', 'Safety Items', 'Socks', 'Specialty Items', 'Spill Response', 'Survivor/Transformer', 'Wipers')),
        'part_number' => $faker->randomElement($array = array('GPA', 'GPK', 'GRA', 'GRSA', 'WPX', 'WRS', 'SNRSF')) . $faker->numerify('###'),
        'description' => $faker->sentence,
        'size' => $faker->numerify('##"L x ##"W'),
        'units_per_package' => $faker->randomElement($array = array(1, 5, 10, 100)),
        'gallons_absorbered_per_package' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),
        'ship_weight' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),
        'quantity_per_pallet' => $faker->numberBetween($min = 10, $max = 50),
        'cost' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100),
        'sell_price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 110, $max = 1000),

    ];
});
