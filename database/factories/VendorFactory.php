<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
        'vendor_name' => $faker->firstNameMale . " " . $faker->firstNameFemale,
    ];
});
