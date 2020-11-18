@extends('layout.main')
@section('title','main')
@section('content')
@include('sweetalert::alert') 

  <!-- Page Content -->
  <div class="container pt-5">
        <H1 class="my-4">Lista de Usuarios</H1>
      
      <!-- /.col-lg-3 -->
      <!-- /.col-lg-9 -->
      <table class="table">
        <thead>
             <th>ID</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Password</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </thead>
        <tbody>
        @foreach ($usuarios as $User)
        <tr>
                <td>{{$User -> id}}</td>
                <td>{{$User -> name}}</td>
                <td>{{$User -> email}}</td>
                <td>{{$User -> password}}</td>
                <td>{{$User -> created_at}}</td>
                <td>
                  <a href="{{route('usuarios.edit', $User->id)}}"><button class=" btn btn-success btn-fab btn-round ">EDITAR</button> </a>
                </td>
                <td>
                  <form action="{{route('usuarios.destroy', $User->id)}}" 
                    method="POST" onsubmit="return confirm('Estas seguro de Eliminar el usuario: {{$User->name}}')">
                    <input name="_method" type="hidden" value="DELETE">
                    {{csrf_field() }}
                    <button type="submit" class="btn btn-danger" btn-fabb btn-round>Eliminar</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div  class="card-footer">
    <a href="{{route('usuarios.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar un usuario </a>
    </div>				

  </div>

    </div>
    <!-- /.row -->
  
  <!-- /.container -->
  @endsection