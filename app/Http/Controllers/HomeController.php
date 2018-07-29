<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top = project::orderBy('id', 'desc')->take(3)->get()->all();
        return view('home')->with(['top' => $top]);
    }
}
