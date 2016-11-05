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
    for ($i = 0; $i < 40; $i++) {
		$data = $faker->date($format = 'Y-m-d', $max = 'now'),
		return [
			'name' => $faker->name,
			'email' => $faker->unique()->safeEmail,
			'birthday' => mt_rand(1960, 1988) . mt_rand(1, 12) . mt_rand(1, 28),
			'address' => $faker->address,
			'city_id' => mt_rand(1, 5000),
			'state_id' => mt_rand(1, 27),
			'zipcode' => mt_rand(81720600, 99720600),
			'genre' => 'm',
			'crm' => $faker->numerify('str #######'),
			'crm_status' => 1,
			'status' => 1,
			'obs' => $faker->text,
			'create_at' => $data,
			'update_at' => $data,
		];
	}
});

factory(App\Patients::class, 50)->create()->each(function($u) {
	$u->posts()->save(factory(App\Patients::class)->make());
});
