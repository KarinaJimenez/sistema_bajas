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
        </div>
        <!-- div form -->
        <div class="container border">
          <div class="left p-4">
            <h2>Editando Carrera: {{$carrera->carrera}}</h2>
          </div>
            <form class="form-horizontal" method="post" action="{{route('carreras.update', $carrera->id)}}" enctype="application/x-www-form-urlencoded">
            {{method_field('PUT')}}  
            <div class="form-group">
              <div class="form-row">
        <div class="form-group col-md-5">
    <label for="carrera">Carrera</label>
    <input value="{{$carrera->carrera}}" type="text" class="form-control" name="carrera" placeholder="Lic. Tecnologias ">
  </div>

    <div class="form-group col-md-4">
      <label for="ciclos_id">Ciclo</label>
      <select class="form-control" name="ciclos_id">
        <option value="0">Seleccione el ciclo</option>
        @foreach($ciclos as $ciclo)
        @if($ciclo->id == $carrera->ciclos_id)
        <option value="{{$ciclo ->id}}" selected>{{$ciclo -> ciclo}}</option>
        @else
        <option value="{{$ciclo ->id}}">{{$ciclo -> ciclo}}</option>
        @endif
        @endforeach
      </select>
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

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection