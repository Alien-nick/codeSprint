<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Buyers::class, function (Faker\Generator $faker) {

    return [
        'crop_type' => $faker->name,
        'order_quantity' => 30,
        'start_date_of_order' => date('Y-m-d', strtotime('2017-08-31')),
        'end_date_of_order' => date('Y-m-d', strtotime('2017-08-31')),
        'order_status' => 'approved'
    ];
});
