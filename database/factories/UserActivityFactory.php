<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\UserActivity;
use Faker\Generator as Faker;
;

$factory->define(UserActivity::class, function (Faker $faker) {
    $users = User::pluck('id')->toArray(); //retrieving all id from user table and binding into array.

    // making collection and converting to array
    $categories_collection = collect(['sport', 'Novel', 'Fantasy', 'Sci-Fi', 'Mystery', 'Thriller', 'Romance', 'Westerns', 'Dystopian', 'Contemporary']);
    $categories_array = $categories_collection->toArray();

    return [
        'ua_user_id'        => $faker->randomElement($users),
        'ua_description'    => $faker->randomElement($categories_array)
    ];
});
