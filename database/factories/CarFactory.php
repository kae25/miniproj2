<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Illuminate\Support\Str;
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

$factory->define(App\Car::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $v = $faker->vehicleArray();

    return [
        'model' => $faker->vehicleType,
        'make' => $faker->name,
        'year' => $faker->year($startDate = '-30 years', $endDate = 'now'),
    ];
});
