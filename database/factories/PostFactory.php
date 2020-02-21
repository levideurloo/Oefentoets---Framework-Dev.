<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(1),
        'excerpt' => $faker->paragraph(5),
        'img_url' => 'http://loremflickr.com/800/600?random='.$faker->numberBetween(1,100),
        'body' => '<p>'.implode('</p><p>', $faker->paragraphs(5)).'</p>',
        'published_at' => $faker->dateTime
    ];
});
