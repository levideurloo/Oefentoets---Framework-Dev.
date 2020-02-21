<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'subject_position' => $faker->randomElement([
            'Headmaster',
            'Grounds Keeper',
            'Flying',
            'Care of Magical Creatures',
            'Defence Against the Dark Arts',
            'Transfiguration',
            'Librarian',
            'Matron',
            'Muggle Studies',
            'Astronomy',
            'Potions',
            'Herbology',
            'Divination',
            'Arithmancy'
        ]),
        'background' => collect($faker->paragraphs($faker->numberBetween(1,3)))->join('<br/>'),
        'is_absent' => $faker->boolean()    
    ];
});
