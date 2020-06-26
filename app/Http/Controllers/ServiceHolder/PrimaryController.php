<?php

namespace App\Http\Controllers\ServiceHolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimaryController extends Controller
{
    public function index(){
        return view('ServiceHolder.layout.app');
    }
}
