@extends('layouts.admin')
@section('content')

    <div class="emptyadmin"></div>
    <div>
        @include('layouts.flash-messages')

    </div>
    <a href="{{route('admin')}}" class="btn btn-yellow" >Volver atras</a>
    <a href="{{route('addactor')}}" class="btn btn-yellow" >Añadir actor</a>
    <div class="col-lg-12 table" >

        <table class="table">
            <thead>
            <tr>
                <th>Titulo</th>
                <th></th>
            </tr>

            @foreach($actors as $actor)
                <tr>
                    <td>{{$actor->actor}}</td>
                    <td>
                        <form action="{{route('veractor.destroy',$actor->id)}}" method='POST'>
                            @csrf
                            @method("DELETE")
                            <a class="btn btn-yellow" href="{{route('veractor.edit',$actor->id)}}">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </thead>
        </table>
    </div>

@endsection