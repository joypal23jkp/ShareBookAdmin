<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ServiceHolder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(ServiceHolder::class, function (Faker $faker) {
    $user_id = User::pluck('id')->toArray(); // converting user ids to an array.
    return [
        'sh_name'           => $faker->name,
        'sh_email'          => $faker->unique()->safeEmail,
        'sh_phone_number'   => $faker->phoneNumber,
        'sh_password'       => Hash::make('11111111'),
        'user_id'           => $faker->randomElement($user_id)
    ];
});
