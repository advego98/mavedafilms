@extends('layouts.admin')
@section('content')

    <div class="emptyadmin"></div>

    <div class="col-lg-12 table" >

        <table class="table">
            <thead>
            <tr>
                <th>Titulo</th>
                <th>Año</th>
                <th><Portada>Portada</Portada></th>
                <th></th>
            </tr>

            @foreach($series as $serie)
                <tr>
                    <td>{{$serie->title}}</td>
                    <td>{{$serie->year}}</td>
                    <td>
                        <img src="{{asset('storage/'.$serie->cover)}}" width="150px" height="220px">
                    </td>
                    <td>
                        <form action="{{route('verserie.destroy',$serie->id)}}" method='POST'>
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-primary" href="{{route('verserie.edit',$serie->id)}}">Edit</a>
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection