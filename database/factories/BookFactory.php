<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(\App\Models\Book::class, function (Faker $faker) {
    $user_id = User::pluck('id')->toArray(); // converting into array.
    return [
        'book_name'             => $faker->name,
        'book_author_name'      => $faker->name,
        'book_published_at'     => $faker->dateTime('now', 'BST'),
        'book_initial_price'    => $faker->numberBetween(50,500),
        'book_is_negotiable'    => $faker->boolean,
        'book_description'      => $faker->sentence(50),
        'book_user_id'          => $faker->randomElement($user_id),

    ];
});
