<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(123456),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->random_int(1, 10000),
        'name' => $faker->name,
    ];
});

$factory->define(App\Acticle::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->text(100),
    ];
});

$factory->define(App\Recommend::class, function (Faker\Generator $faker) {
    return [
        'subject' => $faker->word,
        'summary' => $faker->text(100),
        'headimage' => $faker->imageUrl(60,60),
        'type' => $faker->numberBetween(0,5),
    ];
});
