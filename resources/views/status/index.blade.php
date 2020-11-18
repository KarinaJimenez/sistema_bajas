@extends('layout.main')
@section('title','main')
@section('content')
@include('sweetalert::alert') 

  <!-- Page Content -->
  <div class="container pt-5">
        <H1 class="my-4">Lista de Status</H1>
    
      <!-- /.col-lg-3 -->
      <!-- /.col-lg-9 -->
      <table class="table">
        <thead>
             <th>ID</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </thead>
        <tbody>
        @foreach ($status as $statu)
        <tr>
                <td>{{$statu -> id}}</td>
                <td>{{$statu -> status}}</td>
                <td>
                  <a href="{{route('status.edit', $statu->id)}}"><button class=" btn btn-success btn-fab btn-round ">EDITAR</button> </a>
                </td>
                <td>
                  <form action="{{route('status.destroy', $statu->id)}}" 
                    method="POST" onsubmit="return confirm('Estas seguro de Eliminar el status: {{$statu->status}}')">
                    <input name="_method" type="hidden" value="DELETE">
                    {{csrf_field() }}
                    <button type="submit" class="btn btn-danger" btn-fabb btn-round>Eliminar</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer" >
    <a href="{{route('status.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar un status  </a>
    </div>				

  </div>

    </div>
    <!-- /.row -->
    
  <!-- /.container -->
  @endsection