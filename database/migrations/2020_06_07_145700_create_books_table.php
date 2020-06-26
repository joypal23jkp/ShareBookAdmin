<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('book_name');
            $table->text('book_author_name');
            $table->dateTime('book_published_at');
            $table->double('book_initial_price');
            $table->boolean('book_is_negotiable');
            $table->longText('book_description');
            $table->string('book_primary_image')->nullable();
            $table->integer('book_likes')->nullable();
            $table->integer('book_dislike')->nullable();
            $table->unsignedBigInteger('book_user_id');
            $table->foreign('book_user_id')->references('id')->on('service_holders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
