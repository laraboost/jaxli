<?php

use Faker\Generator as Faker;

$factory->define(App\FeatureRequest::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph()
    ];
});
