<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;

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
        $series = Series::all();
        return view('home',compact('series'));

    }

//    public function show($id)
//    {
//
//        $serie = Series::find($id);
//        return view('home',compact('serie'));
//
//    }



}
