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
          <div>    
        </div>
        <!-- div form -->
        <div class="container border">
          <div class="left p-4">
            <h2>Editando Alumno: {{$alumno->nombre}}</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('alumnos.update', $alumno->id)}}" enctype="application/x-www-form-urlencoded">
            {{method_field('PUT')}}  
            <div class="form-group">
              <div class="form-row">
        <div class="form-group col-md-2">
    <label for="codigo">Codigo</label>
    <input  value="{{$alumno->codigo}}" type="text" class="form-control" name="codigo" placeholder="Codigo del alumno">
    </div>
        <div class="form-group col-md-5">
    <label for="nombre">Nombre(s)</label>
    <input value="{{$alumno->nombre}}" type="text" class="form-control" name="nombre" placeholder="Nombre(s) ">
  </div>
  <div class="form-group col-md-5">
    <label for="aPaterno">Primer Apellido</label>
    <input value="{{$alumno->aPaterno}}" type="text" class="form-control" name="aPaterno" placeholder="Apellido Paterno">
  </div>
  <div class="form-group col-md-4">
    <label for="aMaterno">Segundo Apellido</label>
    <input value="{{$alumno->aMaterno}}" type="text" class="form-control" name="aMaterno" placeholder="Apellido Materno">
  </div>
    <div class="form-group col-md-2">
    <label for="telefono">Telefono</label>
    <input value="{{$alumno->telefono}}" type="text" class="form-control" name="telefono" placeholder="Fijo o movil">
  </div>

  <div class="form-group col-md-4">
      <label for="carreras_id">Carrera</label>
      <select class="form-control" name="carreras_id">
        <option value="0">Seleccione la carrera</option>
        @foreach($carreras as $carrera)
        @if($carrera->id == $alumno->carreras_id)
            <option value="{{$carrera->id}}" selected>{{$carrera->carrera}}</option>
        @else
            <option value="{{$carrera->id}}">{{$carrera->carrera}}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="ciclos_id">Ciclo</label>
      <select class="form-control" name="ciclos_id">
        <option value="0">Seleccione el ciclo</option>
        @foreach($ciclos as $ciclo)
        @if($ciclo->id == $alumno->ciclos_id)
            <option value="{{$ciclo->id}}" selected>{{$ciclo->ciclo}}</option>
        @else
            <option value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="solicitudes_id">Solicitudes</label>
      <select class="form-control" name="solicitudes_id">
        <option value="0">Seleccione la solicitud</option>
        @foreach($solicitud as $solicitude)
        @if($solicitude->id == $alumno->solicitudes_id)
            <option value="{{$solicitude ->id}}" selected>{{$solicitude -> solicitud}}</option>
         @else
            <option value="{{$solicitude ->id}}">{{$solicitude -> solicitud}}</option>
        @endif
        @endforeach
      </select>
    </div>
    
    <div class="form-group col-md-2">
       <label for="Dominio">Dominio</label>
       <input type="checkbox" name="Dominio" id="Dominio" value="1" 
       @if($alumno->Dominio == 1) checked @endif>
      </div>

    <div class="form-group col-md-2">
   <label for="Moodle">Moodle</label>
   <input type="checkbox" name="Moodle" id="Moodle" value="1"
    @if($alumno->Moodle == 1) checked @endif>
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