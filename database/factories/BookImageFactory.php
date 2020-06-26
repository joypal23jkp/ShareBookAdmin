<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Book;
use App\Models\BookImage;
use Faker\Generator as Faker;

$factory->define(BookImage::class, function (Faker $faker) {
    $books = Book::all()->get(); //  verting book ids to an array
    return [

    ];
});
