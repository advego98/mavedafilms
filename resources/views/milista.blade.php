@extends ('layouts.multimedia')
@section('content')
<div>
@foreach($licontent as $lista)

<a href="{{route('verserie.show', $lista->id)}}">
    <img src="{{asset('storage/'.$lista->cover)}}">

    @endforeach
</div>
