<?php

namespace App\Http\Controllers;

use App\Actors;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actors::all();
        return view('admin.indexactor',compact('actors'));
    }



    public function store(Request $request)
    {

        Actors::create([
            'actor'=>$request->actor
        ]);

        return redirect()->route('veractor.index');
    }



    public function show($id)
    {
//
    }



    public function edit($id)
    {
        $actor=Actors::find($id);

        return view('admin.editactor',compact('actor'));
    }



    public function update(Request $request, $id)
    {
        $actor=Actors::find($id);

        $actor->update([
            'actor'=>$request->actor
        ]);

        return redirect()->route('veractor.index');
    }



    public function destroy($id)
    {
        $actor = Actors::find($id);
        $actor->delete();
        return redirect()->route('veractor.index');

    }
}
