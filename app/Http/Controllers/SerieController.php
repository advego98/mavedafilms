<?php

namespace App\Http\Controllers;
use App\Actors;
use App\ActorSerie;
use App\Episodes;
use App\Genre;
use App\GenreSerie;
use App\Property;
use App\Seasons;
use App\Series;
use Illuminate\Http\Request;


class SerieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $series = Series::all();
        return view('admin.indexserie',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        $generos=Genre::all();
        $actores = Actors::all();
        return view('admin.newserie',compact('generos','actores'));
    }

    public function store(Request $request)
    {
        if(!is_null($request->file('portada'))){

            $cover=$request->file('portada')->store('photos','public');
        }else{

            $cover= "4LFUoZ0YGK1q5d9aS2ClHDE4uwgFSL5XfPvKKMoM.jpeg";

        }

//        $cover=$request->file('portada')->store('photos','public');
       $newserie = $request -> title;


        $nserie = Series::orderBy('id','desc')->first();

        $codigo= substr($request->title,0, 3 );

        $id= $nserie['id']+1;
        $ref = $codigo.$id;


        $serie=Series::create([

            'code_serie' => $ref,
            'title' => $newserie,
            'description'  => $request -> description,
            'year'  => $request ->  anyo,
            'cover' => $cover,
            'rating' => 80,
            'featuring' => 0,
            'kid_restriction'  => $request -> restriccion,
            'duration'   => $request -> duracion
        ]);

        $generos=$request->generos;
        foreach ($generos as $genero){
            GenreSerie::create([
                'genre_id'=>$genero,
                'serie_id'=>$serie->id
            ]);
        }

        $actores=$request->actores;
        foreach ($actores as $actor){
            ActorSerie::create([
                'actor_id'=>$actor,
                'serie_id'=>$serie->id
            ]);
        }


    return redirect()->route('verserie.index')->with('success','Se ha creado con exito');
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
        $_SESSION['id_list_s']=$id;
        $vgeneros = GenreSerie::where('serie_id','=',$id)->get();
        $acts_serie = ActorSerie::where('serie_id',$id)->get();
        $serie = Series::find($id);

        $season=Seasons::where("serie_id",$id)->first();

        $episode=Episodes::where("season_id",$season->id)->first();
        $episode_link=$episode->url;
        foreach ($vgeneros as $vgenero){

            $genero=$vgenero->genre_id;
            $generosSerie[] = Genre::where('id','=',$genero)->get();
        }


        foreach ($acts_serie as $actores){

            $actor=$actores->actor_id;
            $actoresSerie[] = Actors::where('id','=',$actor)->get();
        }

        return  view('multimedia.selectserie' , compact('serie', 'generosSerie','actoresSerie','episode_link'));




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie=Series::find($id);
        $generos=Genre::all();
        $vgeneros = GenreSerie::where('serie_id',$id)->get();
        $generosSerie=array();
        foreach ($vgeneros as $vgenero){
            $generosSerie[]=$vgenero->genre_id;
        }
        $actores=Actors::all();
        $vactores = ActorSerie::where('serie_id',$id)->get();
        $actoresSerie = array();
        foreach ($vactores as $vactor){
            $actoresSerie[]=$vactor->actor_id;
        }
        return view('admin.editserie',compact('serie','generos','generosSerie','actores','actoresSerie'));
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
        $serie=Series::find($id);

        $gens_serie = GenreSerie::where('serie_id',$id)->get();

        $generosSerie=array();

        foreach ($gens_serie as $gen_serie){
            $generosSerie[]=$gen_serie->genre_id;
        }

        $acts_serie = ActorSerie::where('serie_id',$id)->get();
        $actorsSerie=array();

        foreach ($acts_serie as $act_serie){
            $actorsSerie[] = $act_serie->actor_id;
        }

        if(!is_null($request->file('portada'))){

            $cover=$request->file('portada')->store('photos','public');

        }else{

            $cover= $serie->cover;

        }

        $serie->update([
            'code_serie' => $serie->code_serie,
            'title' => $request -> title,
            'description'  => $request -> description,
            'year'  => $request ->  anyo,
            'cover' => $cover,
            'rating' => 80,
            'featuring' => 0,
            'kid_restriction'  => $request -> restriccion,
            'duration'   => $request -> duration
        ]);



        $generos=$request->generos;
        foreach ($generos as $genero){

            if (!in_array($genero,$generosSerie)){
                GenreSerie::create([
                    'genre_id'=>$genero,
                    'serie_id'=>$serie->id
                ]);
            }
        }
        foreach ($generosSerie as $genero){
            if (!in_array($genero,$generos)){
                $gens=GenreSerie::where('serie_id',$id)->get();
                foreach ($gens as $gen){
                    if ($gen->genre_id==$genero){
                        $gen->delete();
                    }
                }

            }
        }

        $actores=$request->actores;
        foreach ($actores as $actor){

            if (!in_array($actor,$actorsSerie)){
                ActorSerie::create([
                    'actor_id'=>$actor,
                    'serie_id'=>$serie->id
                ]);
            }
        }
        foreach ($actorsSerie as $actor){
            if (!in_array($actor,$actores)){
                $acts=ActorSerie::where('serie_id',$id)->get();
                foreach ($acts as $act){
                    if ($act->actor_id==$actor){
                        $act->delete();
                    }
                }

            }
        }


        return redirect()->route('verserie.index')->with('success','Se ha editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Series::find($id);
        $serie->delete();
        return redirect()->route('verserie.index')->with('success','Se ha eliminado con exito');

    }
}
