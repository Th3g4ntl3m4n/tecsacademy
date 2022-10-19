@extends('layouts.navegacionTemplate')

@section('content')

<h1 class="visually-hidden">Heroes examples</h1>

<div class="px-4 py-5 my-5 text-center">
  <img class="d-block mx-auto mb-4" src="{{ asset('images/tecsacademy/academy.png')}}" alt="" width="150" height="57">
  <h1 class="display-5 fw-bold">Estamos a un paso de empezar!</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Recibimos tu solicitud, reviza tu correo electronico y contia aprendiendo</p>
    <p class="lead mb-4">Ya puedes cerrar esta ventana</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <!--
      <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
        -->
    </div>
  </div>
</div>

@endsection