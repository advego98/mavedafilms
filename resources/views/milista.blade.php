@extends ('layouts.multimedia')
@section('content')
<div>
@foreach($licontent as $lista)

<a href="{{route('verserie.show', $lista->id)}}">
    <img src="{{asset('storage/'.$lista->cover)}}">
</a>
    @endforeach
</div>
 <div>
@foreach($limovie as $listam)

        <a href="{{route('verpelicula.show', $listam->id)}}">

        <img src="{{asset('storage/'.$listam->cover)}}">
        </a>
  @endforeach
 </div>

