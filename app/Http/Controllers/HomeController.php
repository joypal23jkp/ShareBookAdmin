<?php

namespace App\Http\Controllers;

use App\Models\ServiceHolder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $service_holders = ServiceHolder::orderBy('created_at', 'desc')->paginate(15);
        return view('home');
    }
}
