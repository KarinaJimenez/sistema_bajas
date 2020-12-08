@extends('layout.main')
@section('title','Home')
@section('content')
    

<!-- Page Content -->


<div class="container pt-5">

    <div class="row">

      <div class="col-lg-3">
      <h1 class="my-4">Ciclos</h1>
        @foreach($ciclos as $ciclo)
        <a href="{{route('alumnos.ciclo',$ciclo->id)}}" class="list-group-item">{{$ciclo->ciclo}}</a>
       @endforeach

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-7">

        <div class="slide my-4">
        
        </div>

        <div class="row">
        @foreach($alumnos as $alumno)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{route('alumnos.show', $alumno->id)}}">{{$alumno->codigo}}</a>
              </h4> 
              <h5>{{$alumno->nombre}} {{$alumno->aPaterno}} {{$alumno->aMaterno}}</h5>
              <h5>{{$alumno->carrera->carrera}}</h5>
              <h5><b>Dominio</b>
              <td>@if($alumno->Dominio==1)<img src="/img/Dominio.png"/>
                @else<img src="/img/tache.png"/> @endif</td>
              <b>Moodle</b>
              <td>@if($alumno->Moodle==1) <img src="/img/Moodle.png"/>
                 @else<img src="/img/tache.png"/> @endif </h5>
              
            </div>
            <div class="card-footer">
            <h5>{{$alumno-> solicitude->solicitud}}</h5>
            
            </div>
          </div>
        </div>
        @endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  @endsection
 
