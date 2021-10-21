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
    <table border="2px" class="styled-table">
        <tr>
            <th scope="col"><strong>Id</strong></th>
            <th scope="col"><strong>Nombre</strong></th>
            <th><strong>User</strong></th>
            <th><strong>Password</strong></th>
            <th><strong>Url</strong></th>
            <th><strong>Description</strong></th>
        </tr>

    
        @foreach ($registros as $registro)
            <tr class="active-row">
                <td colspan="">{{$registro->id}}</td>
                <td colspan="">{{$registro->name}}</td>
                <td>{{$registro->user}}</td>
                <td>{{$registro->pasword}}</td>
                <td>{{$registro->url}}</td>
                <td>{{$registro->description}}</td>
                <td><a href="{{route('registros.show',$registro->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                <td><a href="{{route('registros.edit',$registro->id)}}" class="btn btn-warning"><i class='far fa-edit'></i></a></td>
                <td><a href="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr> 
        @endforeach
      </table>
      <br>
    {{$registros->links()}}
@endsection
