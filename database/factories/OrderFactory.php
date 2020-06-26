<?php

use App\Order;
use App\User;
use Faker\Generator as Faker;

/** @var Order $factory */
$factory->define(Order::class, function (Faker $faker) {
    return [
        'total_price' => $faker->numberBetween(100, 200),
        'user_id'     => function () {
            return factory(User::class)->create()->getKey();
        },
    ];
});
