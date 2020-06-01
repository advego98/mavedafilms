<?php

namespace App\Http\Controllers;
use App\Genre;
use App\GenreSerie;
use App\Property;
use App\Series;
use App\User;
use Illuminate\Http\Request;


class SerieController extends Controller
{

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
        return view('admin.newserie',compact('generos'));
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


    return redirect()->route('verserie.index');
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

        $serie = Series::find($id);
        return  view('multimedia.selectserie' , compact('serie'));

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

        return view('admin.editserie',compact('serie','generos','generosSerie'));
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

        return redirect()->route('verserie.index');
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
        return redirect()->route('verserie.index');

    }
}
