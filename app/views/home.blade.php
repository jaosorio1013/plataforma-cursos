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

        <div class="container marketing">
            <div class="row">
                @foreach($cursos AS $index => $curso)
                    @if($index % 4 == 0)
                        <div class="clearfix"></div>
                    @endif
                    <div class="col-lg-3">
                        <img class="img-thumbnail" src="{{ $curso->imagen->path }}" alt="Generic placeholder image">
                        <h2>{{ $curso->nombre }}</h2>
                        <p>{{ $curso->descripcion }}</p>
                        <p>$ {{ $curso->valor }}</p>
                        <p>
                        <ul>
                            @foreach($curso->modulos AS $modulo)
                                <li>
                                    {{ $modulo }}
                                </li>
                            @endforeach
                            @if($curso->modulosAdicionales)
                                <li>y {{ $curso->modulosAdicionales }} modulos mas...</li>
                            @endif
                        </ul>
                        </p>
                        <p><a class="btn btn-default" href="#" role="button">Comprar »</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop