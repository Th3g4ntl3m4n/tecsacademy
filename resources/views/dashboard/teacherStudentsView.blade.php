

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
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>


    @foreach($teacher_list as $list)
    <!--  consultar el nombre del usuario porque tiene el ID -->
    <?php
     $username = DB::table('users')->where('id', '=', $list['id_user'])->get();     
    ?>
   
        <tr>
        <th scope="row">{{$list['id']}}</th>       
        <td>Jefferson Hernandez <td>
        <td>{{$list['created_at']}}</td>
        <td>{{$list['status']}}</td>
        <td>{{$list['transaction_reference']}}</td>
        <td>        
        <button class="btn btn-warning"><a href="#">Comunicate con el estudiante</a></button>
        </td>
        </tr>           
 @endforeach

    </tbody>
    </table>
</div>

@endsection
