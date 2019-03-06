<?php

use Faker\Generator as Faker;
use App\UserInfo;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween($min = 1, $max = 10),
        'ship_to_name' => $faker->randomElement(($array = array($faker->firstNameMale . " " . $faker->lastName, $faker->firstNameFemale . " " . $faker->lastName))),
        'ship_to_street' => $faker->streetAddress,
        'ship_to_city' => $faker->city,
        'ship_to_state' => $faker->stateAbbr,
        'ship_to_zip' => $faker->postcode,
        'bill_to_street' => $faker->streetAddress,
        'bill_to_city' => $faker->city,
        'bill_to_state' => $faker->stateAbbr,
        'bill_to_zip' => $faker->postcode,
        'phone' => $faker->tollFreePhoneNumber,
        'fax' => $faker->tollFreePhoneNumber,
        'cell_phone' => $faker->tollFreePhoneNumber,
        'tax_exempt' => $faker->randomElement($array = array(true, false)),

    ];
});
