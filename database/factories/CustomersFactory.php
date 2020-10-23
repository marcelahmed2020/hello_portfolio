<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customers;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'desc' => $faker->paragraph,
        'active'  => random_int(0 ,1) ,
        'user_id' => factory(App\User::class),

    ];
});
