@extends('layout.main')
@section('title','Home')
@section('content')
    

<!-- Page Content -->
<div class="container pt-5">

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <!-- div -->
        <div class="carousel slide my-4">
    
        </div>
        <!-- div form -->
        <div class="container border">
          <div class="left p-4">
            <h2>Editando Solicitud: {{$solicitud->solicitud}}</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('solicitud.update', $solicitud->id)}}" enctype="application/x-www-form-urlencoded">
            {{method_field('PUT')}}   
            <div class="form-group">
              <div class="form-row">
        
            <div class="form-group col-md-5">
                <label for="solicitud">Solicitud</label>
                <input value="{{$solicitud->solicitud}}" type="text" class="form-control" name="solicitud" placeholder="Baja por artículo ">
            </div>

            <div class="form-group col-md-4">
            <label for="users_id">Usuarios</label>
            <select class="form-control" name="users_id">
                <option value="0">Seleccione el usuario</option>
                @foreach($usuarios as $User)
                @if($User->id == $solicitud->users_id)
                <option value="{{$User->id}}" selected>{{$User->name}}</option>
                @else
                <option value="{{$User->id}}">{{$User->name}}</option>
                @endif
                @endforeach
            </select>
            </div>

            <div class="form-group col-md-4">
            <label for="status_id">Status</label>
            <select class="form-control" name="status_id">
                <option value="0">Seleccione el status</option>
                @foreach($status as $statu)
                @if($statu->id == $solicitud->status_id)
                <option value="{{$statu->id}}" selected>{{$statu->status}}</option>
                @else
                <option value="{{$statu->id}}">{{$statu->status}}</option>
                @endif
                @endforeach
            </select>
            </div>

    </div>
             
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Guardar Usuarios</button>
               </div>
               {{ csrf_field() }}  
            </form>
          </div>
      </div>
      <!-- /.col-lg-9 -->

    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection