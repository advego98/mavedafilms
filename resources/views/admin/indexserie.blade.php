@extends('layouts.admin')
@section('content')

    <div class="emptyadmin"></div>
    <div>
        @include('layouts.flash-messages')

    </div>
    <a href="{{route('admin')}}" class="btn btn-outline-warning atras" >Volver atras</a>
    <a href="{{route('verserie.create')}}" class="btn btn-yellow añadir" >Añadir serie</a>
    <div class="col-lg-12 table" >

        <table class="table">
            <thead>
            <tr>
                <th>Titulo</th>
                <th>Año</th>
                <th>Portada</th>
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
                            <a class="btn btn-yellow" href="{{route('verserie.edit',$serie->id)}}">Editar</a>
                            <a class="btn btn-yellow" href="{{route('verseason.show',$serie->id)}}">Administrar temporadas</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection
