@extends('layout.main')
@section('title','Home')
@section('content')
    

<!-- Page Content -->
<div class="container pt-5">
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <!-- div -->
        <div  class="carousel slide my-4" >
        
        </div>
        <!-- div form -->
        <div class="container border">
          <div class="left p-4">
            <h2>Crear una nueva Carrera</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('carreras.store')}}" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
              <div class="form-row">
       
        <div class="form-group col-md-5">
    <label for="carrera">Carrera</label>
    <input type="text" class="form-control {!! $errors->first('carrera','has-danger')!!}" name="carrera" placeholder="Nombre de la Carrera ">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('carrera')!!}</small>
  </div>
    <div class="form-group col-md-4">
      <label for="ciclos_id">Ciclo</label>
      <select class="form-control {!! $errors->first('ciclos_id','has-danger')!!}" name="ciclos_id">
        <option value="">Seleccione el ciclo</option>
        @foreach($ciclos as $ciclo)
        <option value="{{$ciclo ->id}}">{{$ciclo -> ciclo}}</option>
        @endforeach
      </select>
      <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('ciclos_id')!!}</small>
    </div>
    

    </div>
             
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Guardar Carreras</button>
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