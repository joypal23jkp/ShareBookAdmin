<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransactions(){
        return view('transaction.trx_list');
    }
}
