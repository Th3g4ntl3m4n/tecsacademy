@extends('dashboard.dashboardTemplate')

@section('content')

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

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
            <!-- Tomar el id del user_payment 
            <input type="hidden" id="id_payment" name="id_payment" value="{{$payment ->id}}">
            <!-- fin Tomar el id del user_payment -->
        <div id="response">
              <button class="btn btn-primary" id="aprobed" value="{{$payment['id']}}" onClick="Aprobed_click(this.value)">Confirmar Pago</button>
            
              <button class="btn btn-danger"><a href="#">Rechazar Transaccion</a></button>
      </div>
        </td>
        </tr>
            
 @endforeach

    </tbody>
    </table>
</div>

@endsection



<!-- Ajax boton id aprobed -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
<script type="text/javascript">
  function Aprobed_click(id_payment)
  {
    
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

           /* e.preventDefault();
              //var confirmation = confirm("Do you want to register the payment?");
              var id_payment = $('#aprobed').val();           */


              $.ajax({
                  url: "{{ route('ClickonConfirmation') }}",
                  type: "POST",
                  data:{
                    id_payment: id_payment, 
                  },
                  dataType: 'json',
                  success: function(response) {
                    if(response) {
                        document.getElementById("response").innerHTML = response;                 
                        
                    }
                  }
                })
    
  }
</script>




    