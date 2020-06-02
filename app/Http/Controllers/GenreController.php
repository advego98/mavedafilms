<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('admin.indexgenre',compact('genres'));
    }



    public function store(Request $request)
    {

        Genre::create([
            'name_genre'=>$request->genre
        ]);

        return redirect()->route('vergenre.index')->with('success','Se ha creado con exito');
    }



    public function show($id)
    {
//
    }



    public function edit($id)
    {
        $genre=Genre::find($id);

        return view('admin.editgenre',compact('genre'));
    }



    public function update(Request $request, $id)
    {
        $genre=Genre::find($id);

        $genre->update([
            'name_genre'=>$request->name
        ]);

        return redirect()->route('vergenre.index');
    }



    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('vergenre.index');

    }
}
