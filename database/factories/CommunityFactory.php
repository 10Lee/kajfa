<?php

use App\Community;
use App\Member;
use Faker\Generator as Faker;

$factory->define(Community::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
    ];
});

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'communities_id' => factory(Community::class)->create()->id,
    ];
});
