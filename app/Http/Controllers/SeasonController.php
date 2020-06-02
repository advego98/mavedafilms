<?php

namespace App\Http\Controllers;


use App\Seasons;
use App\Series;

use Illuminate\Http\Request;

class SeasonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
//        $serie=Series::find($id);
//        $seasons = Seasons::where('code_season',"=",$serie->code_serie);
//        var_dump($seasons);
//        die();
//        return view('admin.indexserie',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();

        $id=$_SESSION['id_serie'];
        $serie = Series::find($id);

        $code_serie= $serie->code_serie;

        $nseason= Seasons::where('serie_id',$id)->count();
        if ($nseason==null){
            $nseason=1;
        } else{
            $nseason++;
        }
        $num=$nseason;
        $code_season= $code_serie."_".$num;


        Seasons::create([
            'code_season'=>$code_season,
            'serie_id'=>$id,
            'name'=>$request->name,
        ]);


        return redirect()->route('verseason.show',$id)->with('success','Se ha creado con exito');
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
        $_SESSION['id_serie']=$id;

        $seasons = Seasons::where('serie_id',$id)->get();

        return view('admin.indexseason',compact('seasons','id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $season=Seasons::find($id);

        return view('admin.editseason',compact('season'));
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
        $season=Seasons::find($id);

        $season->update([
            'code_season'=>$season->code_season,
            'serie_id'=>$season->serie_id,
            'name'=>$request->name,
        ]);

        return redirect()->route('verseason.show', $season->serie_id);
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
        $season = Seasons::find($id);
        $season->delete();
        return redirect()->route('verseason.show',$_SESSION['id_serie']);

    }
}
