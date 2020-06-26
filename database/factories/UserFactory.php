<?php


use App\User;
use Faker\Generator as Faker;

/** @var User $factory */
$factory->define(User::class, function (Faker $faker) {
    return [
        'name'     => $faker->name,
        'email'    => $faker->unique()->safeEmail,
        'password' => bcrypt('12345'),
    ];
});
