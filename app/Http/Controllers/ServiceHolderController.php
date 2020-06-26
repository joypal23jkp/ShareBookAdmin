<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceHolderController extends Controller
{
    public function index(){
        return view('ServiceHolder.sh_list');
    }
}
