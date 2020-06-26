<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // showing all books in a table format
    public function index() {
        return view('book.books');
    }

    // showing a single book information
    public function showBook(){
        return view('book.book');
    }

    //showing add book form
    public function showAddBook(){
        return view('book.add_book');
    }

    // receiving a post request and save that information to book table
    public function saveBook(Request $request){

    }

    // removing book information
    public function removeBook(Request $request){

    }

    // showing edit book form
    public function showEditBookForm(){
        return view('book.edit_book_view');
    }

    // receiving a post request and save that information to specific row of book table
    public function editBook(Request $request){

    }
}
