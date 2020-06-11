@extends('layouts.admin')
@section('content')

    <div class="emptyadmin"></div>
    <div>
        @include('layouts.flash-messages')

    </div>
    <a href="{{route('admin')}}" class="btn btn-outline-warning atras" >Volver atras</a>
    <a href="{{route('vertemp',$id)}}" class="btn btn-yellow añadir" >Añadir temporada</a>
    <div class="col-lg-12 table" >
        <h2 class="admin-header">{{$titulo}}</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Titulo</th>
                <th></th>
            </tr>

            @foreach($seasons as $season)
                <tr>
                    <td>{{$season->name}}</td>
                    <td>
                        <form action="{{route('verseason.destroy',$season->id)}}" method='POST'>
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-yellow" href="{{route('verseason.edit',$season->id)}}">Editar</a>
                            <a class="btn btn-yellow" href="{{route('verepisode.show',$season->id)}}">Administrar capitulos</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection
