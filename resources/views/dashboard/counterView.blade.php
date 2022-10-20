@extends('dashboard.dashboardTemplate')

@section('content')

<div class="container">
    <table class="table caption-top">
    <caption>Lista de usuarios</caption>
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

    @foreach($user_payment as $payment)
    // consultar el nombre del usuario porque tiene el ID
    <?php
     $username  = DB::table('users')->where('id', '=', $payment['id_user'])->get();
     
    ?>
   
        <tr>
        <th scope="row">{{$payment['id']}}</th>
        <td>{{$username[0]->name}}</td>
        <td>{{$payment['created_at']}}</td>
        <td>{{$payment['status']}}</td>
        <td>{{$payment['transaction_reference']}}</td>
        <td>
        <button class="btn btn-primary"><a href="{{ route('ClickonConfirmation')}}">Confirmar pago</a></button>
        <button class="btn btn-danger"><a href="#">Rechazar Transaccion</a></button>
        </td>
        </tr>           
 @endforeach

    </tbody>
    </table>
</div>

@endsection
