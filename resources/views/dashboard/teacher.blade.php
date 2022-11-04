
<div class="container">

        <h1>Hello {{ auth()->user()->name}}</h1>
        <button class="btn btn-primary"><a href="{{ route('teacherStudentsView')}}">Consultar</a></button>

</div>