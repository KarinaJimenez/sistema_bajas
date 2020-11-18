@extends('layout.main')
@section('title','main')
@section('content')
@include('sweetalert::alert') 

  <!-- Page Content -->
  <div class="container pt-5">
        <H1 class="my-4">Lista de Solicitudes</H1>
      
      <!-- /.col-lg-3 -->
      <!-- /.col-lg-9 -->
      <table class="table">
        <thead>
             <th>ID</th>
            <th>Solicitud</th>
            <th>Usuario</th>
            <th>Status</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </thead>
        <tbody>
        @foreach ($solicitud as $solicitude)
        <tr>
                <td>{{$solicitude -> id}}</td>
                <td>{{$solicitude -> solicitud}}</td>
                <td>{{$solicitude -> User->name}}</td>
                <td>{{$solicitude -> statu-> status}}</td>
                <td>{{$solicitude -> created_at}}</td>
                <td>
                  <a href="{{route('solicitud.edit', $solicitude->id)}}"><button class="btn btn-success btn-fab btn-round ">EDITAR</button></a>
                </td>
                <td>
                  <form action="{{route('solicitud.destroy', $solicitude->id)}}" 
                    method="POST" onsubmit="return confirm('Estas seguro de Eliminar la solicitud: {{$solicitude->solicitud}}')">
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
    <a href="{{route('solicitud.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar una solicitud  </a>
    </div>				

  </div>

    </div>
    <!-- /.row -->
    
  <!-- /.container -->
  @endsection