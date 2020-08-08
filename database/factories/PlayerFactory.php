<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' =>  $faker->lastName(200),
        'gender'    =>  rand(10,50) %2==0 ? 'M' : 'F' ,  // I have't seen the full faker pakage docs so giving random values using a trick
        'age'       =>  rand(20,30),
        'teams_id'  =>  rand(1,10)
    ];
});




// $table->string('first_name');
// $table->string('last_name');
// $table->char('gender',1);
// $table->integer('age');
