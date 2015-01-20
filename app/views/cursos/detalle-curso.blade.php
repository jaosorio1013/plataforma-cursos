@extends('layouts/default')

@section('content')
    <div class="container">
        <h1>Curso {{ $curso->nombre }} ({{ $curso->valor }})</h1>
        <p>
            <img class="img-thumbnail" src="{{ $curso->imagen->path }}" alt="Generic placeholder image">
        </p>
        <p>
            {{ $curso->descripcion }}
        </p>

        <div class="container marketing">
            <div class="row">
                @foreach($curso->categorias AS $index => $categoria)
                    @if($index % 4 == 0)
                        <div class="clearfix"></div>
                    @endif
                    <div class="col-lg-3">
                        <img class="img-thumbnail" src="{{ $categoria['imagen'] }}" alt="{{ $categoria['nombre'] }}">
                        <h2>{{ $categoria['nombre'] }}</h2>
                        <p>
                            <ul>
                                @foreach($categoria['retos'] AS $reto)
                                    <li>{{ $reto }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop