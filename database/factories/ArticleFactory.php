<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use App\User;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraph(2)

    ];
});
