
@extends('dashboard.dashboardTemplate')

@section('content')

<div class="container">
        <h1>Vamos a registrar un producto</h1>
            <form method="POST" action="{{ route('productRegister') }}">           
            @csrf
                <div class="form-group">
                    <label>Nombre del producto</label>
                    <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label >Precio</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Another input">
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Ingresa una imagen</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                <button value="submit" type="submit" class="btn btn-primary">Crear</button>
            </form>
</div>
<br>
<br>
<br>

@endsection