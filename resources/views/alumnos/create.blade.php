@extends('layout.main')
@section('title','Home')
@section('content')
    

<!-- Page Content -->
<div class="container pt-5">

    <div class="row">
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <!-- div -->
        <div class="carousel slide my-4">
     
      
        </div>
        <!-- div form -->
        <div class="container border">
          <div class="left p-4">
            <h2>Crear un nuevo Alumno</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('alumnos.store')}}" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
              <div class="form-row">
        <div class="form-group col-md-2">
    <label for="codigo">Codigo</label>
    <input type="text" class="form-control {!! $errors->first('codigo','has-danger')!!}" name="codigo" placeholder="Codigo del alumno">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('codigo')!!}</small>
    </div>
        <div class="form-group col-md-5">
    <label for="nombre">Nombre(s)</label>
    <input type="text" class="form-control {!! $errors->first('nombre','has-danger')!!}" name="nombre" placeholder="Nombre(s) del alumno">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('nombre')!!}</small>
  </div>
  <div class="form-group col-md-5">
    <label for="aPaterno">Primer Apellido</label>
    <input type="text" class="form-control {!! $errors->first('aPaterno','has-danger')!!}" name="aPaterno" placeholder="Apellido Paterno del alumno">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('aPaterno')!!}</small>
  </div>
  <div class="form-group col-md-4">
    <label for="aMaterno">Segundo Apellido</label>
    <input type="text" class="form-control {!! $errors->first('aMaterno','has-danger')!!}" name="aMaterno" placeholder="Apellido Materno">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('aMaterno')!!}</small>
  </div>
    <div class="form-group col-md-2">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control {!! $errors->first('telefono','has-danger')!!}" name="telefono" placeholder="Fijo o movil">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('telefono')!!}</small>
  </div>

  <div class="form-group col-md-4">
      <label for="carreras_id">Carrera</label>
      <select class="form-control {!! $errors->first('carreras_id','has-danger')!!}" name="carreras_id">
        <option value="0">Seleccione la carrera</option>
        @foreach($carreras as $carrera)
        <option value="{{$carrera ->id}}">{{$carrera -> carrera}}</option>
        @endforeach
      </select>
      <span class="form-control-feedback"></span>
      <small style="color:red">{!!$errors->first('carreras_id')!!}</small>
    </div>

    <div class="form-group col-md-4">
      <label for="ciclos_id">Ciclo</label>
      <select class="form-control {!! $errors->first('ciclos_id','has-danger')!!}" name="ciclos_id">
        <option value="0">Seleccione el ciclo</option>
        @foreach($ciclos as $ciclo)
        <option value="{{$ciclo ->id}}">{{$ciclo -> ciclo}}</option>
        @endforeach
      </select>
      <span class="form-control-feedback"></span>
      <small style="color:red">{!!$errors->first('ciclos_id')!!}</small>
    </div>
    <div class="form-group col-md-4">
      <label for="solicitudes_id">Solicitudes</label>
      <select class="form-control {!! $errors->first('solicitudes_id','has-danger')!!}" name="solicitudes_id">
        <option value="0">Seleccione la solicitud</option>
        @foreach($solicitud as $solicitude)
        <option value="{{$solicitude ->id}}">{{$solicitude -> solicitud}}</option>
        @endforeach
      </select>
      <span class="form-control-feedback"></span>
      <small style="color:red">{!!$errors->first('solicitudes_id')!!}</small>
    </div>

    </div>
             
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Guardar Alumno</button>
               </div>
               {{ csrf_field() }}  
            </form>
          </div>
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection