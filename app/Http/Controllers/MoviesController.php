<?php

namespace App\Http\Controllers;
use App\Genre;
use App\GenreMovie;
use App\GenreSerie;
use App\Movies;
use App\Property;
use App\Series;
use App\User;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\Types\Null_;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::all();
        return view('admin.indexmovie',compact('movies'));
    }

    public function create(){
        $generos=Genre::all();
        return view('admin.newmovie',compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!is_null($request->file('portada'))){

            $cover=$request->file('portada')->store('photos','public');

        }else{

            $cover= "4LFUoZ0YGK1q5d9aS2ClHDE4uwgFSL5XfPvKKMoM.jpeg";

        }

        $url=$request->file('url')->store('movies','public');
//
        $newmovie = $request -> title;


        $nmovies = Movies::orderBy('id','desc')->first();

        $codigo= substr($request->title,0, 3 );

        $id= $nmovies['id']+1;
        $ref = $codigo.$id;


        $movie=Movies::create([

            'movie_code' => $ref,
            'title' => $newmovie,
            'description'  => $request -> description,
            'year'  => $request ->  anyo,
            'cover' => $cover,
            'rating' => 80,
            'featuring' => 0,
            'url' => $url,
            'kid_restriction'  => $request -> restriccion,
            'duration'   => $request -> duracion

        ]);

        $generos=$request->generos;
        foreach ($generos as $genero){
            GenreMovie::create([
                'genre_id'=>$genero,
                'id_movie'=>$movie->id
            ]);
        }

        return redirect()->route('verpelicula.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $movies = Movies::find($id);
        return  view('multimedia.selectmovie' , compact('movies'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie=Movies::find($id);
        $generos=Genre::all();
        $vgeneros = GenreMovie::where('id_movie',$id)->get();
        $generosMovie=array();
        foreach ($vgeneros as $vgenero){
            $generosMovie[]=$vgenero->genre_id;
        }
        return view('admin.editmovie',compact('movie','generos','generosMovie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie=Movies::find($id);

        $gens_movie = GenreMovie::where('id_movie',$id)->get();

        $generosMovie=array();

        foreach ($gens_movie as $gen_movie){
            $generosMovie[]=$gen_movie->genre_id;
        }

        if(!is_null($request->file('portada'))){

            $cover=$request->file('portada')->store('photos','public');
        }else{

            $cover= $movie->cover;

        }

        if(!is_null($request->file('url'))){

            $url=$request->file('url')->store('movies','public');
        }else{

            $url= $movie->url;

        }



        $movie->update([
            'movie_code' => $movie->movie_code,
            'title' => $request->title,
            'description'  => $request -> description,
            'year'  => $request ->  anyo,
            'cover' => $cover,
            'rating' => 80,
            'featuring' => 0,
            'url' => $url,
            'kid_restriction'  => $request -> restriccion,
            'duration'   => $request -> duration
        ]);

        $generos=$request->generos;
        foreach ($generos as $genero){

            if (!in_array($genero,$generosMovie)){
                GenreMovie::create([
                    'genre_id'=>$genero,
                    'id_movie'=>$movie->id
                ]);
            }
        }
        foreach ($generosMovie as $genero){
            if (!in_array($genero,$generos)){
                $gens=GenreMovie::where('id_movie',$id)->get();
                foreach ($gens as $gen){
                    if ($gen->genre_id==$genero){
                        $gen->delete();
                    }
                }

            }
        }

        return redirect()->route('verpelicula.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movies::find($id);
        $movie->delete();
        return redirect()->route('verpelicula.index');


    }
}
