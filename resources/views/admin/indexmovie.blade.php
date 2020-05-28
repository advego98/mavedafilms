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

            <tr>
                <td></td>
                <td></td>
                <td>

                </td>
                <td>
                    <form action="" method='POST'>
                        @csrf
                        @method("DELETE")
                        <a class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </td>
            </tr>


            </thead>
        </table>
    </div>

@endsection