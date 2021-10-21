@extends('layouts.plantilla')

@section('title', 'Registro '. $registro->id)

@section('content')
    <h2>Empiza el curso ya {{$registro->name}}</h2>
    <p>Descripcion {{$registro->description}}</p>
    <div>
        <a href="{{route('registros.index')}}" class="btn btn-primary">Volver</a>
        <a href="{{route('registros.edit',$registro->id)}}" class="btn btn-info">Editar</a>
        <br><br>
        <form action="{{route('registros.destroy',$registro)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
