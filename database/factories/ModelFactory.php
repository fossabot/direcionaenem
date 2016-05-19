<?php

$factory->define(App\Entities\Instrutor::class, function (Faker\Generator $faker) {
    return [
        'nome'           => $faker->name,
        'email'          => $faker->safeEmail,
        'papel'          => 'instructor',
        'senha'          => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entities\Estudante::class, function (Faker\Generator $faker) {
    return [
        'nome'           => $faker->name,
        'email'          => $faker->safeEmail,
        'papel'          => 'estudante',
        'senha'          => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
