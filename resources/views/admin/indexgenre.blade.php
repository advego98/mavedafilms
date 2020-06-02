@extends('layouts.admin')
@section('content')

    <div class="emptyadmin"></div>
    <div>
        @include('layouts.flash-messages')

    </div>
    <a href="{{route('admin')}}" class="btn btn-yellow" >Volver atras</a>
    <a href="{{route('addgenre')}}" class="btn btn-yellow" >Añadir genero</a>
    <div class="col-lg-12 table" >

        <table class="table">
            <thead>
            <tr>
                <th>Titulo</th>
                <th></th>
            </tr>

            @foreach($genres as $genre)
                <tr>
                    <td>{{$genre->name_genre}}</td>
                    <td>
                        <form action="{{route('vergenre.destroy',$genre->id)}}" method='POST'>
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-yellow" href="{{route('vergenre.edit',$genre->id)}}">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection