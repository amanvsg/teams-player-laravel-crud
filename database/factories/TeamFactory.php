<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'country'=>$faker->country(),
        
    ];
});






// Schema for teams table (you may add additional fields as needed):

//     id
//     name
//     created_at
//     updated_at
