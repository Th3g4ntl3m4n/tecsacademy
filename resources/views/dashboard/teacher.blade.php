
<div class="container">

        <h1>Hello {{ auth()->user()->name}}</h1>
        <button><a href="{{ route('teacherStudentsView')}}">Consultar</a></button>

</div>