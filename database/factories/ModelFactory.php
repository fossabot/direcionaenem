<?php

$factory->define(App\Entities\Instructor::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'role'           => 'instructor',
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
