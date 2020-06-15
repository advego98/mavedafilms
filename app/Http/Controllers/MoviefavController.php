<?php

namespace App\Http\Controllers;

use App\Movie_fav;
use App\Movies;
use Illuminate\Http\Request;

class MoviefavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = auth()->user()->id;
//        $activemovie = Movie_fav::all()->where('user_id', $user);
//        $movies=[];
//
//        foreach ($activemovie as $movies){
//
//            $movies[]=$movies['movie_id'];
//        }
//        $movies_favs=[];
//        foreach ($movies as $s){
//
//
//            $li[] = Movies::where('id', '=', $s )->get();
//
//        }
//
//        foreach ($li as $lista){
//
//            $licontent[]= $lista[0];
//
//        }
//
////        var_dump($li[1][0]['id']);
////        var_dump($licontent);
////        var_dump($li);
////        die;
//        return view('milista', compact('licontent'));

    }




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
        $id=$_SESSION['id_list_m'];

        $exist = Movie_fav::where("user_id",$user)->where("movie_id",$id)->doesntExist();
        if ($exist){
            Movie_fav::create([


                'user_id'=> $user,
                'movie_id' => $id


            ]);
        } else{

            $movie = Movie_fav::where([
                ['user_id', '=', $user ],
                ['movie_id', '=', $id ],
            ]);


            $movie->delete();
        }


        return redirect()->route('verpelicula.show', $id);

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
        $user = auth()->user()->id;

        $movie = Movie_fav::where([
            ['user_id', '=', $user ],
            ['movie_id', '=', $id ],
        ]);


        $movie->delete();

        return redirect()->route('lista.index');
    }
}
