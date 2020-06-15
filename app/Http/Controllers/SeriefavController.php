<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie_fav;
use App\Movie_fav;
use App\Movies;
use App\Series;

class SeriefavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $activeserie = Serie_fav::all()->where('user_id', $user);
        $activemovie = Movie_fav::all()->where('user_id', $user);
        $series=[];
        $movies=[];

        foreach ($activeserie as $serie){

            $series[]=$serie['serie_id'];
        }
        $li=[];
        foreach ($series as $s){


           $li[] = Series::where('id', '=', $s )->get();

        }

        $licontent=[];

        foreach ($li as $lista){

            $licontent[]= $lista[0];

        }


        foreach ($activemovie as $movie){

            $movies[]=$movie['movie_id'];
        }
        $lm=[];

        foreach ($movies as $m){

//

            $lm[] = Movies::where('id', '=', $m )->get();

        }

        $limovie=[];

        foreach ($lm as $listamovie){


            $limovie[]= $listamovie[0];



        }



//        var_dump($li[1][0]['id']);
//        var_dump($licontent);
//        var_dump($li);
//        die;
       return view('milista', compact('licontent', 'limovie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user()->id;

        session_start();
        $id=$_SESSION['id_list_s'];
//         var_dump($id);
//         die;
        Serie_fav::create([


            'user_id'=> $user,
                'serie_id' => $id


        ]);

        return redirect()->route('verserie.show', $id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
//        var_dump($id);
//        die;

        $user = auth()->user()->id;
        $li = Serie_fav::where('id', '=', $user )->get();
        $serie = Serie_fav::where([
            ['user_id', '=', $user ],
            ['serie_id', '=', $id ],
]);


        $serie->delete();

        return redirect()->route('lista.index');
    }

}
