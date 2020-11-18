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
            <h2>Crear un nuevo Ciclo</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('ciclos.store')}}" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
              <div class="form-row">
        <div class="form-group col-md-3">
    <label>Ciclo</label>
    <input type="text" class="form-control {!! $errors->first('ciclo','has-danger')!!}" name="ciclo" placeholder="Escribe el Ciclo escolar">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('ciclo')!!}</small>
    </div>
    </div>
             
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Guardar Ciclos</button>
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