<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    return [

        // this is an array of brands. Each vendor has their own brands array for testing purposes
        //located in App/Config/constants.php
        'brand_name' => $faker->randomElement($array = Config::get('constants.ors_brands')),

    ];
});
 