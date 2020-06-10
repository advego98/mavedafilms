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


    public function buscador($multimedia)
    {


        $series = Series::where("title", "LIKE", "%{$multimedia}%")
            ->paginate(25);
        $movies = Movies::where("title", "LIKE", "%{$multimedia}%")
            ->paginate(25);



        $resultados_string="";


        foreach($movies as $row)
        {

            $resultados_string.="<option value='".$row[1]."'>";
        }

        echo $resultados_string;



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


    public function reqContact(Publication $publication){

        $contact=Contact::create([
            'interested_id'=>Auth::user()->id,
            'publication_id'=>$publication->id,
        ]);
        Mail::to(Auth::user()->email)
            ->send(new ContactRequired($publication));

        return view('contactRequest',compact('publication'))->with('success','We have sent you a message!');
    }


//    public function show($id)
//    {
//
//        $serie = Series::find($id);
//        return view('home',compact('serie'));
//
//    }



}
