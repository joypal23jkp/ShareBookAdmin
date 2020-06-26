<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function showBookRequest(){
        return view('request.req_book_list');
    }
    public function showTrxRequest(){
        return view('request.req_trx_list');
    }
}
