<?php

use Faker\Generator as Faker;

$factory->define(App\VendorInfo::class, function (Faker $faker) {
    return [
        'vendor_id' => $faker->numberBetween($min = 1, $max = 3),
        'company_name' => $faker->randomElement(($array = array($faker->firstNameMale . " " . $faker->lastName, $faker->firstNameFemale . " " . $faker->lastName))),
        'email_for_ordering' => $faker->safeEmail,
        'email_for_accounts_payable' => $faker->safeEmail,
        'email_for_accounts_receivables' => $faker->safeEmail,
        'bill_to_name' => $faker->word,
        'bill_to_street' => $faker->streetAddress,
        'bill_to_city' => $faker->city,
        'bill_to_state' => $faker->stateAbbr,
        'bill_to_zip' => $faker->postcode,
        'phone_for_ordering' => $faker->tollFreePhoneNumber,
        'fax_for_accounts_payable' => $faker->tollFreePhoneNumber,
        'fax_for_accounts_recievables' => $faker->tollFreePhoneNumber,
        'phone_for_accounts_payable' => $faker->tollFreePhoneNumber,
        'phone_for_accounts_recievables' => $faker->tollFreePhoneNumber,
        'fax_for_ordering' => $faker->tollFreePhoneNumber,
        'payment_terms_id' => $faker->unique()->numberBetween($min = 1, $max = 10),

    ];
});
