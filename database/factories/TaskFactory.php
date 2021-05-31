<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'description'=>$faker->word,
        // non ho bisogno di mettere un faker all employee_id

    ];
});
