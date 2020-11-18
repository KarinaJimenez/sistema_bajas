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
            <h2>Editando usuario: {{$usuarios->name}}</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('usuarios.update', $usuarios->id)}}" enctype="application/x-www-form-urlencoded">
            {{method_field('PUT')}}  
            <div class="form-group">
              <div class="form-row">
        
            <div class="form-group col-md-5">
                <label for="name">Nombre(s)</label>
                <input value="{{$usuarios->name}}" type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-5">
                <label for="email">Email</label>
                <input value="{{$usuarios->email}}" type="text" class="form-control" name="email">
            </div>
          
            <div class="form-group col-md-4">
                <label for="password">Password</label>
                <input value="{{$usuarios->password}}" type="text" class="form-control" name="password">
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