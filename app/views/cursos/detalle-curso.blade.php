@extends('layouts/default')

@section('content')
    <div class="container">
        <h1>Curso {{ $curso->nombre }} ({{ $curso->valor }})</h1>
        <p>
            <img class="img-thumbnail" src="{{ $curso->imagen->path }}" alt="Generic placeholder image">
        </p>

        <div class="container marketing">
            <div class="row">
                @foreach($curso->modulos AS $index => $modulo)
                    @if($index % 4 == 0)
                        <div class="clearfix"></div>
                    @endif
                    <div class="col-lg-3">
                        <img class="img-thumbnail" src="{{ $modulo['imagen'] }}" alt="{{ $modulo['nombre'] }}">
                        <h2>{{ $modulo['nombre'] }}</h2>
                        <p>
                            <ul>
                                @foreach($modulo['lecciones'] AS $leccion)
                                    <li>{{ $leccion }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop