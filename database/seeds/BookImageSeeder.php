<?php

use Illuminate\Database\Seeder;

class BookImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = \App\Models\Book::all();

    }
}
