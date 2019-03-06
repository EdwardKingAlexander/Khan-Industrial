<?php

use Faker\Generator as Faker;

$factory->define(App\VendorContact::class, function (Faker $faker) {
    return [
        'vendor_id' => $faker->numberBetween($min = 1, $max = 5),
        'first_name' => $faker->randomElement($array = array($faker->firstNameMale, $faker->firstNameFemale)),
        'last_name' => $faker->lastName,
        'phone' => $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'fax' => $faker->tollFreePhoneNumber,
        'ship_to_street_address' => $faker->streetAddress,
        'ship_to_city' => $faker->city,
        'ship_to_state' => $faker->state,
        'ship_to_zip' => $faker->postcode,
        'bill_to_address' => $faker->streetAddress,
        'bill_to_city' => $faker->city,
        'bill_to_state' => $faker->state,
        'bill_to_zip' => $faker->postcode,
        'terms_id' => 1

    ];
});
