<?php

namespace App\Http\Controllers;

use App\Episodes;
use App\Seasons;
use App\Series;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function crear($id)
    {
        return view('admin.newepisode',compact('id'));
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

        session_start();

        $id=$_SESSION['id_season'];


        $season=Seasons::find($id);

        $nepisode= Episodes::where('season_id',$id)->count();
        if ($nepisode==null){
            $nepisode=1;
        } else{
            $nepisode++;
        }
        $num=$nepisode;
        $code_episode= $season->code_season."_".$num;



        Episodes::create([
            'code_episode'=>$code_episode,
            'season_id'=>$id,
            'title'=>$request->name,
            'url'=>$request->url,
            'cover'=>$cover
        ]);


        return redirect()->route('verepisode.show',$id);
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
        $_SESSION['id_season']=$id;

        $episodes = Episodes::where('season_id',$id)->get();

        $season = Seasons::find($id);

        $temporada= $season->name;

        $serie= Series::find($season->serie_id);

        $titulo = $serie->title;

        return view('admin.indexepisodes',compact('episodes','id','titulo', 'temporada'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $episode=Episodes::find($id);
        $id = $episode->season_id;

        return view('admin.editepisode',compact('episode','id'));
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
        $episode=Episodes::find($id);
        if(!is_null($request->file('portada'))){

            $cover=$request->file('portada')->store('photos','public');
        }else{

            $cover= $episode->cover;

        }

        if(!is_null($request->file('url'))){

            $url=$request->file('url')->store('movies','public');
        }else{

            $url= $episode->url;

        }
        $season=Seasons::find($episode->season_id);

        $episode->update([
            'code_episode'=>$episode->code_episode,
            'season_id'=>$season->id,
            'title'=>$request->title,
            'url'=>$url,
            'cover'=>$cover
        ]);

        return redirect()->route('verepisode.show', $season->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session_start();
        $episode = Episodes::find($id);
        $episode->delete();
        return redirect()->route('verepisode.show',$_SESSION['id_season']);

    }
}
