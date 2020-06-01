<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use App\Movies;

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
        $movies = Movies::all();

        return view('home',compact('series', 'movies'));

    }


    public function busqueda(Request $request)
    {

        $busqueda = $request->search;


        $series = Series::where("title", "LIKE", "%{$request->get('search')}%")
            ->paginate(25);
        $movies = Movies::where("title", "LIKE", "%{$request->get('search')}%")
            ->paginate(25);

        return view('home', compact('movies', 'busqueda', 'series'));


    }


    public function seriehome()
    {

      $series = Series::all();

      return view('homeserie', compact('series'));

    }


    public function moviehome()
    {

        $movies = Movies::all();

        return view('homemovie', compact('movies'));

    }




//    public function show($id)
//    {
//
//        $serie = Series::find($id);
//        return view('home',compact('serie'));
//
//    }



}
