<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Blog::class, function (Faker $faker) {

    return [
        'title' => $faker->realText(20),
        'content' => $faker->realText(),
        'user_id' => function() {
            return factory(\App\User::class)->create()->id;

        }
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        'title' => $faker->realText(20),
        'content' => $faker->realText(),
        'user_id' => function() {
            return factory(\App\User::class)->create()->id;
        },
        'blog_id' => function() {
            return factory(\App\Blog::class)->create()->user_id;
        }
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {

    return [
        'content' => $faker->realText(),
        'user_id' => function() {
            return factory(\App\User::class)->create()->id;
        },
        'post_id' => function() {
            return factory(\App\Post::class)->create()->id;
        }
    ];
});

$factory->define(App\Tag::class, function (Faker $faker){

    return [
        'name' => $faker->realText(20)
    ];
});
