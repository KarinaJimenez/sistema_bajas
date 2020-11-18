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
            <h2>Editando Ciclo: {{$ciclos->ciclo}}</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('ciclos.update', $ciclos->id)}}" enctype="application/x-www-form-urlencoded">
            {{method_field('PUT')}}  
            <div class="form-group">
              <div class="form-row">
        <div class="form-group col-md-2">
    <label>Ciclo</label>
    <input value="{{$ciclos->ciclo}}" type="text" class="form-control" name="ciclo" placeholder=" 2020 A">
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