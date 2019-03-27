<?php

use Faker\Generator as Faker;

$factory->define(App\Level::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'department_id' => function () {
            return factory(App\Department::class)->create()->id;
        }
    ];
});
