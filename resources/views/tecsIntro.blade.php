@extends('layouts.navegacionTemplate')

@section('content')

            <h1>CONTENIDO</h1>

            <div class="container">
                <div class="row">
                    <div class="col-6 text-center">
                        <h3>Tecs Intro</h3>
                        <img class="ml-2" src="{{ asset('images/tecsacademy/tecsintro.jpg')}}" style="width:500px; height:500px;"></img>
                    </div>
                    <div class="col-6">
                        <h3>¿Conoces nuestro curso?</h3>
                        <p>Aprender inglés se ha constituido en la mejor herramienta para personas de todo el mundo que buscan comunicarse de una manera efectiva y profesional, no se trata solo de hablar una segunda lengua, se trata de poderse comunicar de manera efectiva en cualquier lugar del mundo donde estes. </p>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Proposito del curso
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                            Este curso está diseñado para familiarizarse con la prueba antes de tomarla, conocer su metodología y solucionar dudas sobre temas específicos, prepararse con los recursos adecuados como aplicaciones, plataformas de xzestudios etc.
                            Adicionalmente, Entender el formato de las preguntas en cada una de las habilidades y lograr que su prueba sea todo un éxito.
                            <strong>Nota:</strong> este no es un curso de inglés, es un curso especifico para preparase para la prueba, el dominio del idioma no depende del curso sino del dominio del idioma de cada candidato.

                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                               Contenido del curso
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                        <ul>
                            <li>    Explicación de cada habilidad de la prueba </li>
                            <li>	Explicación sobre Marco Común Europeo de referencia</li>
                            <li>	Entender el sistema de seguridad de la prueba</li>
                            <li>	Conectividad</li>
                            <li>	Herramientas</li>
                            <li>	Oportunidades para alcanzar el nivel</li>
                            <li>	Calibración </li>
                            <li>	Ejercitación en teoría de respuestas</li>
                            <li>	¿Como luce la prueba?</li>
                            <li>	¿Cómo manejar el tiempo?</li>
                            <li>	Tips y practica de conversación.</li>
                            <li>	Evolución de conversación</li>
                            <li>	Tips gramática</li>
                            <li>	Evaluación gramática</li>
                            <li>	Técnicas de lectura corta y practica</li>
                            <li>	Tips de lectura</li>
                            <li>	Técnicas de comprensión auditiva y practica </li>
                            <li>	Tips escucha</li>
                            <li>	Como leer y entender el certificado.</li>
                            <li>	Aplicación de examen simulacro EDE (Englis Diagnosis Exam)</li>
                        </ul>

                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Metodologia del curso
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <ul>
                                        <li>Clases con profesores en vivo.</li>
                                        <li>30 Horas en total.</li>
                                        <li>3 semanas de curso.</li>
                                        <li>Sesiones de 2 horas diarias.</li>
                                        <li>15 clases en total.</li>
                                </ul>

                                        De lunes a viernes 6/8 pm básico: Básico comprende A0/-A1- A1 (Seleccione los días de la semana y el horario de acuerdo a su nivel)

                                </ul>
                            </div>
                            </div>                            
                        </div>

                        
                        </div>
                        @auth
                        <a href="{{ route('paydetails')}}"><button class="btn btn-primary">Ir al Carrito</button></a>
                        @else
                        <a href="{{ route('login')}}"><button class="btn btn-warning">Inicia Sesion</button></a>
                        <a href="{{ route('register')}}">Registrate aquí</a>
                        @endauth
                 </div>
               </div>
               
             </div>

             <br>
             <br>
             <br>
                                   
             <!-- jQuery -->
        <script src="{{ asset('vendor/jquery.min.js')}}"></script>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="{{ asset('vendor/popper.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap.min.js')}}"></script>

<!-- Perfect Scrollbar -->
<script src="{{ asset('vendor/perfect-scrollbar.min.js')}}"></script>

<!-- DOM Factory -->
<script src="{{ asset('vendor/dom-factory.js')}}"></script>

<!-- MDK -->
<script src="{{ asset('vendor/material-design-kit.js')}}"></script>

<!-- App JS -->
<script src="{{ asset('js/app.js')}}"></script>

<!-- Preloader -->
<script src="{{ asset('js/preloader.js')}}"></script>

</body>

</html>

@endsection