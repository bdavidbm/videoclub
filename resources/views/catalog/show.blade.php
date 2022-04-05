@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-4">
        <img src="{{$pelicula['poster']}}" style="height:370px"/>
    </div>
    <div class="col-sm-8">
         {{-- TODO: Datos de la película --}}
         <h1 style="min-height:45px;margin:5px 0 10px 0">
            {{$pelicula['title']}}
        </h1>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            Año: {{$pelicula['year']}}
        </h4>
        <h4 style="min-height:45px;margin:3px 0 5px 0">
            Director: {{$pelicula['director']}}
        </h4>
        <h6 style="min-height:45px;margin:5px 0 10px 0">
            Resumen: {{$pelicula['synopsis']}}
        </h6>
        <h6 style="min-height:45px;margin:5px 0 10px 0">
            Estado: {{($pelicula['rented']) ?  "Película actualmente alquilada" : "Película disponible"}}
        </h6>
        <div>
            @if($pelicula['rented'])
                <button type="button" class="btn btn-danger">Devolver Pelicula</button>
            @else
                <button type="button" class="btn btn-success">Alquilar Pelicula</button>
            @endif
            <button type="button" class="btn btn-warning">Editar Pelicula</button>
            <button type="button" class="btn btn-light">Volver al Listado</button>
        </div>
    </div>
</div>
@stop
