@extends('layouts.admin')
@section('content')

    <div class="emptyadmin"></div>
    <div>
        @include('layouts.flash-messages')

    </div>
    <a href="{{route('admin')}}" class="btn btn-outline-warning" >Volver atras</a>
    <a href="{{route('newepisode')}}" class="btn btn-yellow" >Añadir capitulo</a>
    <div class="col-lg-12 table" >

        <table class="table">
            <thead>
            <tr>
                <th>Titulo</th>
                <th></th>
            </tr>

            @foreach($episodes as $episode)
                <tr>
                    <td>{{$episode->title}}</td>
                    <td>
                        <form action="{{route('verepisode.destroy',$episode->id)}}" method='POST'>
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-yellow" href="{{route('verepisode.edit',$episode->id)}}">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection