<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\ClientsData;
use App\ClientsMate;
use App\Subscribe;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(\App\Post::class, function (Faker $faker) {
    return [
       'name'    => $faker->name,
        'active'  => random_int(0 ,1) ,

    ];
});




// $factory->define(App\ClientsMate::class, function ($faker) {
//    return [
//        'lang_id' => 1,
//        'client_name' => 'client_name',
//        'client_id' => factory(App\ClientsData::class),
//    ];
// });
// t
// $factory->define(App\ClientsData::class, function ($faker) {
   // return [
       // 'clients_logo' => 'clients_logo',
       // 'enabled' => 1,
// ];
// });
