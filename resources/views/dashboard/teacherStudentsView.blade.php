
<?php
use Illuminate\Support\Facades\DB;

?>

@extends('dashboard.dashboardTemplate')

@section('content')

<style type="text/css">
    .hide{
        display: none;
    }

    .show {
        display: block;
    }
</style>



<div class="container">
<a href="{{ route('formNewCourse')}}"><button class="btn btn-primary align-text-top"> Crear cursos </button></a>
</div>
<br>
<br>

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


    @foreach($shoStudents as $students)
    <!--  consultar el nombre del usuario porque tiene el ID -->
    <?php
     
     $username = DB::table('users')->where('id', '=', 22)->get();     
     
    ?>
   
        <tr>
        <th scope="row">{{$students['id_user']}}</th>       
        <td>Nombre<td>
        <td>{{$students['created_at']}}</td>
        <td>{{$students['status']}}</td>
        <td>Null</td>
        <td>        
        <button class="btn btn-warning"><a href="#">Matricular</a></button>
        <button class="btn btn-primary" id="hideText_btns"><a href="#">Dar Feedback</a></button>
        <div class="hide" id="hideText">            
            <form id="contactform" action="{{ route('sendFeedback')}}" method="POST">
            @csrf
             <label for="exampleFormControlTextarea1">Dar Feedback al estudiante</label>
             <div id="response">
             <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
             
             <button type="submit">Enviar</button>
             </div>
            </form>
            
        </div>
        </td>
        </tr>           
 @endforeach

    </tbody>
    </table>
</div>


<!-- Funcion toogle para boton dar feedback -->
<script type="text/javascript">
    let hideText_btns = document.getElementById('hideText_btns');
    let hideText = document.getElementById('hideText');

    hideText_btns.addEventListener('click', toggleText);

    function toggleText(){
        hideText.classList.toggle('show');
    }
</script>

<!-- Ajax para el formulario 

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
<script type="text/javascript">
  function Send_form(id_payment)
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

-->

<script>

$(document).ready(function(){
	$('#contactform').submit(function(event){

		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
            dataType: 'json',
			success: function(response) {
                    if(response) {
                        document.getElementById("response").innerHTML = response;                 
                        
                    }
		}
	})
});

</script>

@endsection
