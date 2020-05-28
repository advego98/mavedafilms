<?php

namespace App\Http\Controllers;
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
        $user= auth()->user()->id;
        $usuario = User::find($user);
        $role = $usuario->hasRole("admin");
        if ($role){
            $properties= Property::all();
        } else {
            $properties = Property::all()->where('user_id',$user);
        }

        return view('properties.index',compact('properties'));
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


        $nmovies = Movies::orderBy('movie_id','desc')->first();

        $codigo= substr($request->title,0, 3 );

        $id= $nmovies['movie_id']+1;
        $ref = $codigo.$id;


        Movies::create([

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


        return view('admin.adminpage');
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
        $property = Property::find($id);
        $user = $property->user_id;
        $nombre = User::find($user);
        return view('properties.show', compact('property', 'nombre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property=Property::find($id);
        $users=User::all();
        return view('properties.edit',compact('property','users'));
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
        $property=Property::find($id);


        if ($request->file('photo')!= null){
            $path=$request->file('photo')->store('photos','public');
        } else {
            $path = Property::find($id)->photo;
        }


        if ($request->publicar != null){
            $publicar = 1;
        } else {
            $publicar =0;
        }

        $nmovies = Movies::orderBy('movies_id','desc')->first();

        $property->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'owner_id'=>$request->owner_id,
            'photo'=>$path,
            'published'=>$publicar
        ]);

        return redirect()->route('properties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties = Property::find($id);
        $properties->delete();
        return redirect()->route('properties.index');

    }
}
