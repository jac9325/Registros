@extends('layouts.plantilla')

@section('title', 'Inicio - Registros')

@section('content')
    <h1>Registros: </h1>
    <a href="{{route('registros.create')}}">Crear Curso</a>
    <ul>
        @foreach ($registros as $registro)
            <li>
                <a href="{{route('registros.show',$registro->id)}}">{{$registro->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$registros->links()}}
@endsection
