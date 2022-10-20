@extends('dashboard.dashboardTemplate')

@section('content')

<div class="container">
    <table class="table caption-top">
    <caption>Lista de Estudiantes</caption>
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha</th>
        <th scope="col">Estado</th>
        <th scope="col">Referencia</th>
        <!-- <th scope="col">Opciones</th> -->
        </tr>
    </thead>
    <tbody>

    @foreach($counter_aprobed as $aprobed)
    <!--  consultar el nombre del usuario porque tiene el ID -->
    <?php
     $username  = DB::table('users')->where('id', '=', $aprobed['id_user'])->get();
     
    ?>
   
        <tr>
        <th scope="row">{{$aprobed['id']}}</th>
        <td>{{$username[0]->name}}</td>
        <td>{{$aprobed['created_at']}}</td>
        <td>{{$aprobed['status']}}</td>
        <td>{{$aprobed['transaction_reference']}}</td>
        <td>        
       <!-- <button class="btn btn-warning"><a href="#">Comunicate con el estudiante</a></button> -->
        </td>
        </tr>           
 @endforeach

    </tbody>
    </table>
</div>

@endsection