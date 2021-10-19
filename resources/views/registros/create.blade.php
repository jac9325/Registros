@extends('layouts.plantilla')

@section('title', 'Inicio - Registros')

@section('content')
    <h2>Creando cursos</h2>
        <form action="{{route('registros.store')}}" method="POST">
            @csrf
            <div>
                <label for="">
                    Name:
                    <input type="text" name="name">
                </label>
                @error('name')
                    <br>
                        <small>
                            *{{$message}}
                        </small>
                    <br>
                @enderror
                <label for="">
                    Url:
                    <input type="text" name="url">
                </label>
                @error('url')
                    <br>
                        <small>
                            *{{$message}}
                        </small>
                    <br>
                @enderror
            </div>
            <p>  </p>
            <div>
                <label for="">
                    User:
                    <input type="text" name="user">
                </label>
                @error('user')
                    <br>
                        <small>
                            *{{$message}}
                        </small>
                    <br>
                @enderror

                <label for="">
                    Password:
                    <input type="text" name="pasword">
                </label>  
                @error('pasword')
                    <br>
                        <small>
                            *{{$message}}
                        </small>
                    <br>
                @enderror    
            </div>

            <p>  </p>
            <label for="">
                Description:<br>
                <textarea name="description" id="" cols="50" rows="5"></textarea>
            </label>
            @error('description')
                    <br>
                        <small>
                            *{{$message}}
                        </small>
                    <br>
                @enderror
            <br>
            <button type="submit">Enviar</button>
        </form>
@endsection
