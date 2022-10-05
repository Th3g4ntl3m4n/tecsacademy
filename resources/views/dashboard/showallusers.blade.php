
@extends('dashboard.dashboardTemplate')

@section('content')

<h1>Usuarios Nuevos </h1>
<p> En esta plantilla podra encontrar los usuarios que estan interesados en iniciar el proceso de inscripcion <p>
@foreach($showallusers as $users)


        <div class="list-group ">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="row">
                                <ul class="list-group list-group-horizontal-sm">
                                    <li class="list-group-item">{{$users['name']}}</li>
                                    <li class="list-group-item">{{$users['phone']}}</li>
                                    <li class="list-group-item">{{$users['email']}}</li>
                                    <li class="list-group-item">{{$users['created_at']}}</li>
                                    <li class="list-group-item"><a href="#" class="btn btn-primary">Eviar</a></li>
                                    
                                </ul>
                            </div>
                        </div>                   
                </li>  
        </div>
@endforeach

@endsection
