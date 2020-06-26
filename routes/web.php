<?php

use App\Events\NewMessageNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('book')->group(function (){
        Route::get('/all', 'BookController@index')->name('all_book');
        Route::get('/', 'BookController@showBook')->name('single_book');
        Route::get('/add', 'BookController@showAddBook')->name('show_add_book');
        Route::post('/add', 'BookController@saveBook')->name('save_data_book');
        Route::post('/remove/{id}', 'BookController@removeBook')->name('remove_book');
        Route::get('/edit/{id}', 'BookController@showEditBookForm')->name('show_edit_book');
        Route::post('/edit', 'BookController@editBook')->name('edit_book');
    });
    Route::prefix('profile')->group(function (){
        Route::prefix('service_holder')->group(function (){
            Route::get('/all', 'ServiceHolderController@index')->name('all_sh');
            Route::get('/{id}', 'ServiceHolderController@showProfile')->name('show_sh_profile');
            Route::get('/edit/{id}', 'ServiceHolderController@showEditProfile')->name('show_sh_edit_profile');
            Route::post('/edit', 'ServiceHolderController@editProfile')->name('edit_sh_profile');
            Route::post('/remove', 'ServiceHolderController@removeProfile')->name('remove_sh_profile');
        });
        Route::prefix('admin')->group(function (){
            Route::get('/{id}', 'ServiceHolderController@showProfile')->name('show_sh_profile');
            Route::get('/edit/{id}', 'ServiceHolderController@showEditProfile')->name('show_sh_edit_profile');
            Route::post('/edit', 'ServiceHolderController@editProfile')->name('edit_sh_profile');
            Route::post('/remove', 'ServiceHolderController@removeProfile')->name('remove_sh_profile');
        });
    });
    Route::prefix('book/transaction')->group(function (){
        Route::get('/list', 'TransactionController@showTransactions')->name('show_transaction_list');
        Route::get('/remove/{id}', 'TransactionController@removeTransactions')->name('remove_transaction');
    });
    Route::prefix('request')->group(function (){
        Route::get('/book/list', 'RequestController@showBookRequest')->name('show_book_request_list');
        Route::get('/book/cancel/{id}', 'RequestController@cancelBookRequest')->name('cancel_book_request');
        Route::get('/trx/list', 'RequestController@showTrxRequest')->name('show_trx_request_list');
        Route::get('/trx/cancel/{id}', 'RequestController@cancelTrxRequest')->name('cancel_trx_request');
    });
});

Route::get('/event', function (){
    event(new NewMessageNotification('Hey How Are You'));
    return view('listen');
});
