<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->randomElement($array = array($faker->firstNameMale, $faker->firstNameFemale)),
        'last_name' => $faker->lastName,
        'role_id' => 1,
        'stripe_id' => $faker->swiftBicNumber,
        'company' => $faker->randomElement($array = array(null, $faker->firstName . " " . $faker->streetName)),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'payment_terms_id' => 1,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});