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

            @foreach($movies as $movie)
                <tr>
                    <td>{{$movie->title}}</td>
                    <td>{{$movie->year}}</td>
                    <td>
                        <img src="{{asset('storage/'.$movie->cover)}}" width="150px" height="220px">
                    </td>
                    <td>
                        <form action="{{route('verpelicula.destroy',$movie->id)}}" method='POST'>
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-primary" href="{{route('verpelicula.edit',$movie->id)}}">Edit</a>
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection