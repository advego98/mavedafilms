@extends ('layouts.admin')
@section('content')

    <div class="mainView" role="main" style="min-height:400px;">
        <div class="admin-container">
            <div style="text-align:center;">
                <h1 class="admin-header">{{$serie->title}}</h1>
                <div class="responsive-account-content">
                    <section class="collapsable-section-content account-section-content">

                        <form action="{{route('verserie.update',$serie->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" class="serieinput" name="title" placeholder="Introduzca titulo" value="{{$serie->title}}">
                            <input type="text" class="serieinput" name="anyo" placeholder="Introduzca año" value="{{$serie->year}}">
                            <input type="file" class="serieinput" name="portada" placeholder="cover">
                            <input type="text" class="textareainput" name="description" placeholder="description" value="{{$serie->description}}">
                            <select name="restriccion" class="serieinput">

                                <option value="3" @if($serie->kid_restriction==3)selected @endif>3</option>
                                <option value="7" @if($serie->kid_restriction==7)selected @endif>7</option>
                                <option value="12" @if($serie->kid_restriction==12)selected @endif>12</option>
                                <option value="16" @if($serie->kid_restriction==16)selected @endif>16</option>
                                <option value="18" @if($serie->kid_restriction==18)selected @endif>18</option>
                            </select>
                            <input type="text" class="serieinput" name="duration" placeholder="Duration" value="{{$serie-> duration}}">
                            <select class="serieinput" name="generos[]" multiple >
                                <optgroup label="Generos">
                                    @foreach($generos as $genero)
                                        <option value="{{$genero->id}}" @if(in_array($genero->id,$generosSerie)) selected @endif>{{$genero->name_genre}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            <select class="serieinput" name="actores[]" multiple >
                                <optgroup label="Generos">
                                    @foreach($actores as $actor)
                                        <option value="{{$actor->id}}" @if(in_array($actor->id,$actoresSerie)) selected @endif>{{$actor->actor}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            <button class="login-button">Editar</button>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection