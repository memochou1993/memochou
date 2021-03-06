<?php

use Faker\Generator as Faker;
use Lcobucci\JWT\Signer\Rsa\Sha256;

$factory->define(App\Record::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTime,
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'private' => $faker->boolean,
        'user_id' => $faker->numberBetween(1, config('seeds.user.number')),
        'created_at'  => now(),
        'updated_at'  => now(),
    ];
});
