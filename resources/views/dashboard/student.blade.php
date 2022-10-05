
<div class="container">

            <h1>Hello {{ auth()->user()->name}}</h1>
            <h2>¿Conoces nuestro curso TECS INTRO?</h2>

            <div>
                    <a href="{{ route('tecsintro')}}"><img src="{{ asset('images/tecsacademy/TecsIntro.jpg')}}" width ="350px"></img><a>
                    
            </div>
           

</div>
<br>
<br>