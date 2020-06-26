<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

    $service_holders = Comment::plack('id')->toArray();
    return [
        'comment_user_id'       => $faker->randomElement($service_holders),
        'comment_description'   => $faker->sentence(10)
    ];
});
