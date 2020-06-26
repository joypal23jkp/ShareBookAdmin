<?php

use App\Models\BookImage;
use App\Models\Comment;
use App\Models\ServiceHolder;
use App\Models\UserActivity;
use App\User;
use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class, 10)->create();
        factory(ServiceHolder::class, 50)->create();
        factory( Book::class, 50)->create();
//        factory(BookImage::class, 50)->create();



        factory(Comment::class, 50)->create();
        factory(UserActivity::class, 30)->create();
    }
}
