<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Like;
use App\Model\User as AppUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return AppUser::all()->random();
        },
        'name'  => $faker->word,
        'slug'  => $faker->word,

    ];
});
