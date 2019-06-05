<?php

<<<<<<< HEAD
=======
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
>>>>>>> 75ec82ba21b09773cc59059b6781dbfe73785aef
use Faker\Generator as Faker;

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

<<<<<<< HEAD
$factory->define(App\User::class, function (Faker $faker) {
=======
$factory->define(User::class, function (Faker $faker) {
>>>>>>> 75ec82ba21b09773cc59059b6781dbfe73785aef
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
<<<<<<< HEAD
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
=======
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
>>>>>>> 75ec82ba21b09773cc59059b6781dbfe73785aef
    ];
});
