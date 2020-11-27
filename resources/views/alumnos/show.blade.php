@extends('layout.main')
@section('title','main')
@section('content')
@include('sweetalert::alert') 

  <!-- Page Content -->
        <div class="container pt-5">
        <H2 class="my-4">Detalles de Alumno: {{$alumno->nombre}}</H2>
      <!-- /.col-lg-3 -->
      
      <!-- /.col-lg-9 -->
     
      <table class="table">
        <thead>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Ciclo</th>
            <th>Carrera</th>
            <th>Solicitud</th>
            <th>Fecha</th>
            <th>Dominio</th>
            <th>Moodle</th>
            <th>Editar</th>
            <th>Eliminar</th>
           
            </thead>
        <tbody>
        <tr>
            <td>{{$alumno -> id}}</td>
            <td>{{$alumno -> codigo}}</td>
            <td>{{$alumno -> nombre}}</td>
            <td>{{$alumno -> aPaterno}}</td>
            <td>{{$alumno -> aMaterno}}</td>
            <td>{{$alumno -> telefono}}</td>
            <td>{{$alumno -> ciclo -> ciclo }}</td>
            <td>{{$alumno -> carrera ->carrera}}</td>
            <td>{{$alumno -> solicitude -> solicitud}} </td>
            <td>{{$alumno -> created_at}}</td>
            <td>@if($alumno->Dominio==1)<img src="/img/palomita.png"/>
                @else<img src="/img/tache.png"/> @endif</td>
            <td>@if($alumno->Moodle==1) <img src="/img/palomita.png"/>
                 @else<img src="/img/tache.png"/> @endif
 </td>

            <td>
                <a href="{{route('alumnos.edit', $alumno->id)}}"><button class=" btn btn-success btn-fab btn-round ">EDITAR</button> </a>
            </td>
            <td>
            <form action="{{route('alumnos.destroy', $alumno->id)}}" 
            method="POST" onsubmit=" return confirm('¿Esta seguro de Eliminar el alumno {{$alumno->nombre}}')">
            <input name="_method" type="hidden" value="DELETE">
            {{ csrf_field() }}
            <button type="submit" class=" btn btn-danger" btn-fabb btn-round >Eliminar</button>
             </form>
                </td>
                </tr>
                </tbody>
    </table>
    <div class="card-footer">
  	
  </div>

    </div>
    <!-- /.row -->
    

  <!-- /.container -->
  @endsection
