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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\PostCategory::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text(160),
        'text' => $faker->text,
        'image' => 'https://colmeiatecnologia/img/template/painel/sem-imagem.jpg',
        'active' => true
    ];
});

$factory->define(App\Models\Banner::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'image' => 'https://colmeiatecnologia/img/template/painel/sem-imagem.jpg',
    ];
});

$factory->define(App\Models\Service::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'icon' => '<i class="fa fa-rebel" aria-hidden="true"></i>',
    ];
});

$factory->define(App\Models\Portfolio::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'url' => 'http://www.'.$faker->domainName,
        'image' => 'https://colmeiatecnologia/img/template/painel/sem-imagem.jpg'
    ];
});
