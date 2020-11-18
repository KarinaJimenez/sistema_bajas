@extends('layout.main')
@section('title','main')
@section('content')
@include('sweetalert::alert') 

  <!-- Page Content -->
  <div class="container pt-5">

  

        <H1 class="my-4">Lista de Carreras</H1>
     
      <!-- /.col-lg-3 -->
      <!-- /.col-lg-9 -->
      <table class="table">
        <thead>
             <th>ID</th>
            <th>Carrera</th>
            <th>Ciclo</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </thead>
        <tbody>
        @foreach ($carreras as $carrera)
        <tr>
                <td>{{$carrera -> id}}</td>
                <td>{{$carrera -> carrera}}</td>
                <td>{{$carrera -> ciclo -> ciclo}}</td>
              <td>
                  <a href="{{route('carreras.edit', $carrera->id)}}"><button class=" btn btn-success btn-fab btn-round ">EDITAR</button> </a>
              </td>
                <td>
                <form action="{{route('carreras.destroy', $carrera->id)}}" 
                      method="POST" onsubmit=" return confirm('¿Esta seguro de Eliminar la carrera {{$carrera->carrera}}')">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class=" btn btn-danger" btn-fabb btn-round>Eliminar</button>
                    </form>
                </td>
               </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer">
    <a href="{{route('carreras.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar una carrera </a>
    </div>				

  </div>

    </div>
    <!-- /.row -->
    
  <!-- /.container -->
  @endsection