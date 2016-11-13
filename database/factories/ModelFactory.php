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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    
    $data = $faker->date($format = 'Y-m-d', $max = 'now');
    return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'type' => mt_rand(1, 3),
            'address' => $faker->address,
            'password' => $faker->password,
            'created_at' => $data,
            'updated_at' => $data,
    ];
});

$factory->define(App\Doctor::class, function (Faker\Generator $faker) {
    
    $data = $faker->date($format = 'Y-m-d', $max = 'now');
    return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $faker->address,
            'city_id' => mt_rand(1, 30),
            'state_id' => 1,
            'zipcode' => mt_rand(81720600, 99720600),
            'genre' => 'm',
            'crm' => mt_rand(81720600, 99720600),
            'crm_status' => 1,
            'status' => 1,
            'obs' => $faker->text,
            'created_at' => $data,
            'updated_at' => $data,
    ];
});

$factory->define(App\Patient::class, function (Faker\Generator $faker) {
    
    $data = $faker->date($format = 'Y-m-d', $max = 'now');
    return [
            'name' => $faker->name,
            'Phone' => $faker->phoneNumber,
            'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $faker->address,
            'city_id' => mt_rand(1, 30),
            'state_id' => 1,
            'zipcode' => mt_rand(81720600, 99720600),
            'genre' => 'm',
            'prof_id' => mt_rand(1, 10),
            'email' => $faker->unique()->safeEmail,
            'cpf' => (string) 65415935745 + mt_rand(1, 9999),
            'obs' => $faker->text,
            'created_at' => $data,
            'updated_at' => $data,
    ];
});
