<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstname'=>$faker->name,
        'lastname'=>$faker->name,
        'ral'=>$faker->numberBetween(1000000,100),

    ];
});
