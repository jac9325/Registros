@extends('layouts.plantilla')

@section('title', 'Registro '. $registro->id)

@section('content')
    <h2>Empiza el curso ya {{$registro->name}}</h2>
    <p>Descripcion {{$registro->description}}</p>
    <div>
        <a href="{{route('registros.index')}}">Volver</a>
        <a href="{{route('registros.edit',$registro->id)}}">Editar</a>
    </div>
@endsection
