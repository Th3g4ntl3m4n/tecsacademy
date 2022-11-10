@extends('dashboard.dashboardTemplate')

@section('content')

<div class="px-4 py-5 my-5 text-center">
  <img class="d-block mx-auto mb-4" src="{{ asset('images/tecsacademy/academy.png')}}" alt="" width="150" height="57">
  <h1 class="display-5 fw-bold">El Curso ha sido creado con exito</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Puedes registrar otro curso o volver a la pagina de asignacion</p>    
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        
      <a href="{{ route('formNewCourse')}}"> <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Crear Otro curso</button></a>
      <a href="{{ route('teacherStudentsView')}}"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Volver</button></a>
        
    </div>
  </div>
</div>

@endsection