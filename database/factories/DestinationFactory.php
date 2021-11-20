<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destination;
use Faker\Generator as Faker;

$factory->define(Destination::class, function (Faker $faker) {
    return [
        'name'=>$this->faker->word,
        'address'=>$this->faker->word,
        'type'=>$this->faker->word,
        'rating'=>$this->faker->word,
    ];
});
