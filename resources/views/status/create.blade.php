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
        
        <div class="container border">
          <div class="left p-4">
            <h2>Crear un Status</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('status.store')}}" enctype="application/x-www-form-urlencoded">
              <div class="form-group">
              <div class="form-row">
       
        <div class="form-group col-md-5">
    <label for="status">Status</label>
    <input type="text" class="form-control {!! $errors->first('status','has-danger')!!}" name="status" placeholder="Escribe un status">
    <span class="form-control-feedback"></span>
    <small style="color:red">{!!$errors->first('status')!!}</small>
  </div>  
    </div>
             
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Guardar Status</button>
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