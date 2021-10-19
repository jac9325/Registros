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
                    <input type="text" name="name" value="{{old('name',$registro->name)}}">
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
                    <input type="text" name="url" value="{{old('url',$registro->url)}}">
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
                    <input type="text" name="user" value="{{old('user',$registro->user)}}">
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
                    <input type="text" name="pasword" value="{{old('pasword',$registro->pasword)}}">
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
                <textarea name="description" id="" cols="50" rows="5">
                    {{old('name',$registro->description)}}
                </textarea>
            </label>
            @error('description')
                    <br>
                        <small>
                            *{{$message}}
                        </small>
                    <br>
                @enderror    
            <br>
            <button type="submit">Actualizar</button>
        </form>
@endsection
