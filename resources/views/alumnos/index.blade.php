@extends('layout.main')
@section('title','main')
@section('content')
@include('sweetalert::alert') 

  <!-- Page Content -->
        <div class="container pt-5">
        <H1 class="my-4">Lista de Alumnos</H1>
      <!-- /.col-lg-3 -->
      
      <!-- /.col-lg-9 -->
     
      <table class="table">
        <thead>
             <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th></th>
            <th></th>
            <th></th>
            </thead>
        <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
                <td>{{$alumno -> id}}</td>
                <td><a href="{{route('alumnos.show', $alumno->id)}}">{{$alumno->codigo}}</a></td>
                <td>{{$alumno -> nombre}}</td>
                <td>{{$alumno -> aPaterno}}</td>
                <td>{{$alumno -> aMaterno}}</td>
                
                <td>
                  <a href="{{route('alumnos.show', $alumno->id)}}"><button class="btn btn-primary">VER</button> </a>
                </td>
                <td>
                  <a href="{{route('alumnos.edit', $alumno->id)}}"><button class=" btn btn-success ">EDITAR</button> </a>
                </td>
                <td>

                <form action="{{route('alumnos.destroy', $alumno->id)}}" 
                      method="POST" onsubmit=" return confirm('¿Esta seguro de Eliminar el alumno {{$alumno->nombre}}')">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class=" btn btn-danger">Eliminar</button>
                    </form>
                </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <div class="card-footer">
    <a href="{{route('alumnos.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar un alumno </a>
    </div>				

  </div>

    </div>
    <!-- /.row -->
    

  <!-- /.container -->
  @endsection