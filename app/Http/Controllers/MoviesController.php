<?php

namespace App\Http\Controllers;
use App\ActorMovie;
use App\Actors;
use App\Genre;
use App\GenreMovie;
use App\Movies;
use App\Property;
use App\User;
use Illuminate\Http\Request;


class MoviesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $actores = Actors::all();
        return view('admin.newmovie',compact('generos','actores'));
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

        $url=$request->url;
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

        $actores=$request->actores;
        foreach ($actores as $actor){
            ActorMovie::create([
                'actor_id'=>$actor,
                'movie_id'=>$movie->id
            ]);
        }

        return redirect()->route('verpelicula.index')->with('success','Se ha creado con exito');
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
        session_start();
        $_SESSION['id_list_m']=$id;
        $vgeneros = GenreMovie::where('id_movie','=',$id)->get();
        $acts_movies = ActorMovie::where('movie_id',$id)->get();
        $movies = Movies::find($id);

        foreach ($vgeneros as $vgenero){

            $genero=$vgenero->genre_id;
            $generosMovie[] = Genre::where('id','=',$genero)->get();
        }

        foreach ($acts_movies as $actores){

            $actor=$actores->actor_id;
            $actoresMovie[] = Actors::where('id','=',$actor)->get();
        }


        return  view('multimedia.selectmovie' , compact('movies', 'generosMovie','actoresMovie'));



    }

    public function vermovie($id){
        $movie= Movies::find($id);

        return  view('multimedia.vermovie' , compact('movie'));

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
        $actores=Actors::all();
        $vactores = ActorMovie::where('movie_id',$id)->get();
        $actoresMovie = array();
        foreach ($vactores as $vactor){
            $actoresMovie[]=$vactor->actor_id;
        }
        return view('admin.editmovie',compact('movie','generos','generosMovie','actores','actoresMovie'));
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

        $acts_movie = ActorMovie::where('movie_id',$id)->get();
        $actorsMovie=array();

        foreach ($acts_movie as $act_movie){
            $actorsMovie[] = $act_movie->actor_id;
        }

        if(!is_null($request->file('portada'))){

            $cover=$request->file('portada')->store('photos','public');
        }else{

            $cover= $movie->cover;

        }



        $url=$request->url;




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

        $actores=$request->actores;
        foreach ($actores as $actor){

            if (!in_array($actor,$actorsMovie)){
                ActorMovie::create([
                    'actor_id'=>$actor,
                    'movie_id'=>$movie->id
                ]);
            }
        }
        foreach ($actorsMovie as $actor){
            if (!in_array($actor,$actores)){
                $acts=ActorMovie::where('movie_id',$id)->get();
                foreach ($acts as $act){
                    if ($act->actor_id==$actor){
                        $act->delete();
                    }
                }

            }
        }

        return redirect()->route('verpelicula.index')->with('success','Se ha editado con exito');

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
        return redirect()->route('verpelicula.index')->with('success','Se ha eliminado con exito');



    }
}
