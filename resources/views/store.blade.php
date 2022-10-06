
@extends('layouts.navegacionTemplate')

@section('content')

<br>
<br>
<br>
<br>
<br>



<div class="container">
<h1 class="text-center">Tienda Virtual</h1>
    <div class="row justify-content-center">

@foreach($showallproducts as $products)

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$products['nameProduct']}}</h5>
    <p class="card-text">{{$products['description']}}</p>
    <h4><strong>$</strong>{{$products['price']}}</h4>
    <a href="#" class="btn btn-primary">conoce mas</a>
  </div>
</div>
@endforeach
</div>
</div>



   


@endsection