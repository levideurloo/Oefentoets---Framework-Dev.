<?php

use Faker\Generator as Faker;

$factory->define(App\Owl::class, function (Faker $faker) {
    return [
        'teacher_id' => $faker->randomDigit,
        'name' => $faker->name(),
        'is_resit' => $faker->boolean(),
        'version_number' => $faker->randomDigit,
        'comments' => $faker->text
    ];
});
