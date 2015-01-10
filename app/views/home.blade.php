@extends('layouts/default')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Cursos</h1>
            <p>Listado de cursos</p>
        </div>
    </div>

    <div class="container">
        <h1>Últimos cursos</h1>

        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
            </tr>
            @foreach($cursos AS $curso)
                <tr>
                    <td>{{ $curso->nombre }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop