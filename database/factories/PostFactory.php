<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'tag'=>$faker->tag,
        'user_id'=>App\User::all()->random()->id
        
    ];
});
