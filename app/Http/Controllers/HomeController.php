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
		$max1 = project::All()->sortByDesc('Rating')->first();
		$max2 = project::All()->sortByDesc('Rating')->where('id', '!=', $max1['id'])->first();
		$max3 = project::All()->sortByDesc('Rating')->where('id', '!=', $max1['id'])->where('id', '!=', $max2['id'])->first();
        return view('home')->with(['max1'=>$max1, 'max2'=>$max2, 'max3'=>$max3]);
    }
}
