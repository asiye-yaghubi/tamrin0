<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\Comment;
use App\User;
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
$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'title' => $faker->text($maxNbChars = 30),
        'demo' => $faker->text($maxNbChars = 120),
        'text' => $faker->text($maxNbChars = 300),
        'image' => $faker->imageUrl($width = 360 , $height = 260 , 'food'),
        'cat' => $faker->name,
        'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),

    ];
});

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'article_id' => $faker->randomDigitNotNull,
        'comment' => $faker->text($maxNbChars = 120),
        'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),

    ];
});