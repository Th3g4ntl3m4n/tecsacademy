

<div class="container">

            <h1>Hello {{ auth()->user()->name}}</h1>
            <h2>¿Conoces nuestro curso TECS INTRO?</h2>

            <div class="container text-center">
                        <div class="row">
                                        <div class="col">
                                        <a href="{{ route('tecsintro')}}">
                                        <img src="{{ asset('images/tecsacademy/TecsIntro.jpg')}}"  width ="350px"  alt="...">
                                        </a>
                                        </div>
                                        <div class="col">
                                                <br>
                                        <p class="fs-1">Es un curso basado en la experiencia de los evaluadores de la compañía ILTO ( International Language Testing Organization) la intención de este curso es brindar a los tomadores las herramientas necesarias para llegar mejor preparado a la prueba internacional TECS</p>

                                        <button type="submit" class="btn btn-primary"><a href="{{ route('tecsintro')}}">Suscribete</a></button>
                                        </div>
                                        </div>
                                        <br>

                                        <!-- Tal vez te interece -->                                       

                                        <div class="row">
                                       
                                                <div class="col">
                                                1 of 3
                                                </div>
                                                <div class="col">
                                                2 of 3
                                                </div>
                                                <div class="col">
                                                3 of 3
                                                </div>
                                        
                                        </div>
                        </div>
</div>
<br>
<br>