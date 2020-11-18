@extends('layout.main')
@section('title','Home')
@section('content')
    

<!-- Page Content -->
<div class="container pt-5">

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <!-- div -->
        <div class="carousel slide my-4" >
        
        </div>
        <!-- div form -->
        <div class="container border">
          <div class="left p-4">
            <h2>Crear Solicitudes</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('solicitud.store')}}" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
              <div class="form-row">
        
            <div class="form-group col-md-5">
                <label for="solicitud">Solicitud</label>
                <input type="text" class="form-control {!! $errors->first('solicitud','has-danger')!!}" name="solicitud" placeholder="Escribe una solicitud ">
                <span class="form-control-feedback"></span>
                <small style="color:red">{!!$errors->first('solicitud')!!}</small>
            </div>
            <div class="form-group col-md-4">
            <label for="users_id">Usuarios</label>
            <select class="form-control {!! $errors->first('users_id','has-danger')!!}" name="users_id">
                <option value="">Seleccione el usuario</option>
                @foreach($usuarios as $User)
                <option value="{{$User ->id}}">{{$User ->name}}</option>
                @endforeach
            </select>
            <span class="form-control-feedback"></span>
            <small style="color:red">{!!$errors->first('users_id')!!}</small>
            </div>

            <div class="form-group col-md-4">
            <label for="status_id">Status</label>
            <select class="form-control {!! $errors->first('status_id','has-danger')!!}" name="status_id">
                <option value="">Seleccione el status</option>
                @foreach($status as $statu)
                <option value="{{$statu ->id}}">{{$statu -> status}}</option>
                @endforeach
            </select>
            <span class="form-control-feedback"></span>
            <small style="color:red">{!!$errors->first('status_id')!!}</small>
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