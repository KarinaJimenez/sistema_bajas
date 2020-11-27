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
            <h2>Crear Usuarios</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('usuarios.store')}}" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
              <div class="form-row">
        
            <div class="form-group col-md-5">
                <label for="name">Usuario</label>
                <input type="text" class="form-control {!! $errors->first('name','has-danger')!!}" name="name" placeholder="Usuario ">
                <span class="form-control-feedback"></span>
                <small style="color:red">{!!$errors->first('name')!!}</small>
              </div>
            <div class="form-group col-md-5">
                <label for="email">Email</label>
                <input type="text" class="form-control {!! $errors->first('email','has-danger')!!}" name="email" placeholder="Escribe el email del usuario">
                <span class="form-control-feedback"></span>
                <small style="color:red">{!!$errors->first('email')!!}</small>  </div>
          
            <div class="form-group col-md-4">
                <label for="password">Password</label>
                <input type="password" class="form-control {!! $errors->first('password','has-danger')!!}" name="password" placeholder="Escribe un password">
                <span class="form-control-feedback"></span>
                <small style="color:red">{!!$errors->first('password')!!}</small>
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