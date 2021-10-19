@extends('layouts.plantilla')

@section('title', 'Editar Registro ' .$registro->id)

@section('content')
    <h2>Editando Curso</h2>
        <form action="{{route('registros.update',$registro)}}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="">
                    Name:
                    <input type="text" name="name" value="{{$registro->name}}">
                </label>

                <label for="">
                    Url:
                    <input type="text" name="url" value="{{$registro->description}}">
                </label>
            </div>
            <p>  </p>
            <div>
                <label for="">
                    User:
                    <input type="text" name="user" value="{{$registro->user}}">
                </label>

                <label for="">
                    Password:
                    <input type="text" name="pasword" value="{{$registro->pasword}}">
                </label>      
            </div>

            <p>  </p>
            <label for="">
                Description:<br>
                <textarea name="description" id="" cols="50" rows="5">{{$registro->description}}</textarea>
            </label>
            <br>
            <button type="submit">Actualizar</button>
        </form>
@endsection
