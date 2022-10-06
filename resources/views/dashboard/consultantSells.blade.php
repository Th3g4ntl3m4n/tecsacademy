
@extends('dashboard.dashboardTemplate')

@section('content')

<div class="container">
    <h2>Mis Ventas</h2>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Id User</th>
            <th scope="col">Product id</th>
            <th scope="col">state</th>
            </tr>
        </thead>
        <tbody>
            @foreach($showallsells as $sells)
            <tr>
            <th scope="row">{{$sells['id']}}</th>
            <td>{{$sells['created_at']}}</td>
            <td>{{$sells['idUser']}}</td>
            <td>{{$sells['product']}}</td>
            <td>{{$sells['state']}}</td>
            </tr>
            
            @endforeach
        </tbody>
        </table>
</div>
@endsection