<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>TecsAcademy</title>

        
        <!-- CDN boostrap -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


        <!-- Own Styles -->
        <link href="{{ asset('css/ownstyles.css')}}" rel="stylesheet"

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- CDN TAILDWINDS JS -->
        

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('vendor/spinkit.css')}}"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{ asset('vendor/perfect-scrollbar.css')}}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{ asset('css/material-icons.css')}}"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="{{ asset('css/fontawesome.css')}}"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('css/preloader.css')}}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{ asset('css/app.css')}}"
              rel="stylesheet">

    </head>

    <body class="layout-sticky-subnav layout-default ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>


            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->
  

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0"
                 data-effects="parallax-background waterfall"
                 data-fixed
                 data-condenses>
                <div class="mdk-header__bg">
                    <div class="mdk-header__bg-front"
                         style="background-image: url({{ asset('images/photodune-4161018-group-of-students-m.jpg')}});"></div>
                </div>
                <div class="mdk-header__content justify-content-center">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood bg-transparent will-fade-background"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="{{ route('home')}}"
                           class="navbar-brand mr-16pt">
                            <!-- <img class="navbar-brand-icon" src="../../public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span><img src="{{ asset('images/tecsacademy/academy.png')}}"
                                         alt="logo"
                                         style="width: 80px;" class="img-fluid"/></span>

                            </span>
                            

                            <!-- <span class="d-none d-lg-block">TecsAcademy</span> -->
                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt" style="padding-left:  50px;">
                            <li class="nav-item active">
                                <a href="index.html"
                                   class="nav-link">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Cursos</a>
                                <div class="dropdown-menu">
                                    <a href="{{ route('tecsintro')}}"
                                       class="dropdown-item">TecsIntro</a>
                                       <!--
                                    <a href="student-course.html"
                                       class="dropdown-item">Preview Course</a>
                                    <a href="student-lesson.html"
                                       class="dropdown-item">Preview Lesson</a>
                                    <a href="student-take-course.html"
                                       class="dropdown-item"><span class="mr-16pt">Take Course</span> <span class="badge badge-notifications badge-accent text-uppercase ml-auto">Pro</span></a>
                                    <a href="student-take-lesson.html"
                                       class="dropdown-item">Take Lesson</a>
                                    <a href="student-take-quiz.html"
                                       class="dropdown-item">Take Quiz</a>
                                    <a href="student-quiz-result-details.html"
                                       class="dropdown-item">Quiz Result</a>
                                    <a href="student-dashboard.html"
                                       class="dropdown-item">Student Dashboard</a>
                                    <a href="student-my-courses.html"
                                       class="dropdown-item">My Courses</a>
                                    <a href="student-quiz-results.html"
                                       class="dropdown-item">My Quizzes</a>
                                    <a href="help-center.html"
                                       class="dropdown-item">Help Center</a>
                                        -->
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Tienda Virtual</a>
                                <div class="dropdown-menu">
                                    <a href="paths.html"
                                       class="dropdown-item">Browse Paths</a>
                                    <a href="student-path.html"
                                       class="dropdown-item">Path Details</a>
                                    <a href="student-path-assessment.html"
                                       class="dropdown-item">Skill Assessment</a>
                                    <a href="student-path-assessment-result.html"
                                       class="dropdown-item">Skill Result</a>
                                    <a href="student-paths.html"
                                       class="dropdown-item">My Paths</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset('precios')}}"
                                   class="nav-link">Precios</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Nosotros</a>
                                <div class="dropdown-menu">
                                    <a href="instructor-dashboard.html"
                                       class="dropdown-item">Instructor Dashboard</a>
                                    <a href="instructor-courses.html"
                                       class="dropdown-item">Manage Courses</a>
                                    <a href="instructor-quizzes.html"
                                       class="dropdown-item">Manage Quizzes</a>
                                    <a href="instructor-earnings.html"
                                       class="dropdown-item">Earnings</a>
                                    <a href="instructor-statement.html"
                                       class="dropdown-item">Statement</a>
                                    <a href="instructor-edit-course.html"
                                       class="dropdown-item">Edit Course</a>
                                    <a href="instructor-edit-quiz.html"
                                       class="dropdown-item">Edit Quiz</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown"
                                data-toggle="tooltip"
                                data-title="Community"
                                data-placement="bottom"
                                data-boundary="window">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">
                                    <i class="material-icons">people_outline</i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="teachers.html"
                                       class="dropdown-item">Browse Teachers</a>
                                    <a href="student-profile.html"
                                       class="dropdown-item">Student Profile</a>
                                    <a href="teacher-profile.html"
                                       class="dropdown-item">Instructor Profile</a>
                                    <a href="blog.html"
                                       class="dropdown-item">Blog</a>
                                    <a href="blog-post.html"
                                       class="dropdown-item">Blog Post</a>
                                    <a href="faq.html"
                                       class="dropdown-item">FAQ</a>
                                    <a href="help-center.html"
                                       class="dropdown-item">Help Center</a>
                                    <a href="discussions.html"
                                       class="dropdown-item">Discussions</a>
                                    <a href="discussion.html"
                                       class="dropdown-item">Discussion Details</a>
                                    <a href="discussions-ask.html"
                                       class="dropdown-item">Ask Question</a>
                                </div>
                            </li>
                        </ul>
                        @auth

                        <li class="nav-item">
                                <a href="{{ route('dashboard')}}"
                                   class="btn btn-outline-white">Dashboard</a>
                            </li>
                        @else

                        <ul class="nav navbar-nav ml-auto mr-0">
                            <li class="nav-item">
                                <a href="{{ route('login')}}"
                                   class="nav-link"
                                   data-toggle="tooltip"
                                   data-title="Login"
                                   data-placement="bottom"
                                   data-boundary="window"><i class="material-icons">lock_open</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register')}}"
                                   class="btn btn-outline-white">Get Started</a>
                            </li>
                            @endauth
                        </ul>
                    </div>

                    <div class="hero container page__container text-center text-md-left py-112pt">



<!-- Contenido tecs Intro -->

<div class="container">
                <div class="row">
                    <div class="col-6 text-center">
                        <h3 style="color:#ffffff;">Estas a punto de empezar!</h3>
                        <img class="ml-2" src="{{ asset('images/tecsacademy/tecsintro.jpg')}}" style="width:500px; height:500px;"></img>
                    </div>
                    <div class="col-6">
                        <h3 style="color:#ffffff;">¿Conoces nuestro curso?</h3>
                        <p style="color:#ffffff;">Aprender inglés se ha constituido en la mejor herramienta para personas de todo el mundo que buscan comunicarse de una manera efectiva y profesional, no se trata solo de hablar una segunda lengua, se trata de poderse comunicar de manera efectiva en cualquier lugar del mundo donde estes. </p>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Proposito del curso
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                            {{$product_form->objetive }}
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
                        <a href="#f1"><button class="btn btn-primary">Comenzar ahora</button></a>
                        @else
                        <a href="#f1"><button class="btn btn-warning">Inicia Sesion</button></a>
                        <a href="#f1" style="color:#ffffff;">Registrate aquí</a>
                        @endauth
                 </div>
               </div>
               
             </div>
<!-- end contenido tecsintro -->

                    
                        <!-- Formulario                     
<br>
<br>
                        <div class="form-register">

                        

                        <div class="login-box">
                            <h2>Queremos Acompañarte</h2>
                            <form method="POST" action="{{ route('firstRegister') }}">
                            @csrf
                            
                                <div class="user-box">
                                <input type="text" name="name" id="name" required="">
                                <label>Ingresa tu nombre completo</label>
                                </div>                                
                                <div class="user-box">
                                <input type="text" name="phone" id="phone" required="">
                                <label>Ingresa tu telefono</label>
                                </div>
                                <div class="user-box">
                                <input type="text" name="email" id="email"required="">
                                <label>Ingresa tu Email</label>
                                </div>
                                <div class="user-box">
                                <input type="text" name="contry" id="contry"required="">
                                <label>Ingresa tu País</label>
                                </div>
                                <!--
                                <div class="user-box">
                                <input type="password" name="" required="">
                                <label>Password</label>
                                </div>
                                -->
                                <!-- <a href="{{ route('home')}}" value="submit" type="button"> 
                                    <button class="a" value="submit" type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Enviar                                
                                    </button>
                            </form>
                            </div>
                    </div>
                        <!-- End Formulario -->





                    </div>
                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->

            <br>
            <br>
            <br>
            <br>

   <div class="container" >


            <div class="mdk-header-layout__content page-content ">
            <h2 id="f1"> Formulario de Registro </h2>
                <div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
                    <div class="container page__container">

                    

            <form method="POST" action="{{ route('firstRegister') }}">
               @csrf
               <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="name" id="name"required="" class="form-control" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefono</label>
                    <input type="text" name="phone" id="phone"required="" class="form-control" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                <label class="form-label">Pais</label>
                <select class="form-select" name="contry" id="contry">
                        <option selected>Selecciona tu pais</option>
                        <option value="CO">Colombia</option>
                        <option value="MX">Mexico</option>
                        <option value="EC">Ecuador</option>
                </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="text" name="email" id="email"required="" class="form-control" placeholder="name@example.com">
                </div>  
                
                <input type="hidden" id="id_product" name="id_product" value="{{ $product_form->id }}"/>
                
                <button type="Submit" class="btn btn-primary">Empezar ahora!</button>

            </form>

</div>
</div>
</div>
</div>




            <!-- Formulario antiguo                  
<br>
<br>


                        <div class="form-register">

                        

                        <div class="login-box">
                            <h2>Queremos Acompañarte</h2>
                            <form method="POST" action="{{ route('firstRegister') }}">
                            @csrf
                            
                                <div class="user-box">
                                <input type="text" name="name" id="name" required="">
                                <label>Ingresa tu nombre completo</label>
                                </div>                                
                                <div class="user-box">
                                <input type="text" name="phone" id="phone" required="">
                                <label>Ingresa tu telefono</label>
                                </div>
                                <div class="user-box">
                                <input type="text" name="email" id="email"required="">
                                <label>Ingresa tu Email</label>
                                </div>
                                <div class="user-box">
                                <input type="text" name="contry" id="contry"required="">
                                <label>Ingresa tu País</label>
                                </div>
                                <!--
                                <div class="user-box">
                                <input type="password" name="" required="">
                                <label>Password</label>
                                </div>
                                -->
                                <!-- <a href="{{ route('home')}}" value="submit" type="button"> 
                                    <button class="a" value="submit" type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Enviar                                
                                    </button>
                            </form>
                            </div>
                    </div>

                        <!-- End Formulario -->

            <!-- start barra informativa 
            <div class="mdk-header-layout__content page-content ">

                <div class="border-bottom-2 py-16pt navbar-light bg-white border-bottom-2">
                    <div class="container page__container">
                        <div class="row align-items-center">
                            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">subscriptions</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">8,000+ Courses</div>
                                    <p class="card-subtitle text-70">Explore a wide range of skills.</p>
                                </div>
                            </div>
                            <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">verified_user</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">By Industry Experts</div>
                                    <p class="card-subtitle text-70">Professional development from the best people.</p>
                                </div>
                            </div>
                            <div class="d-flex col-md align-items-center">
                                <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                                    <i class="material-icons text-white">update</i>
                                </div>
                                <div class="flex">
                                    <div class="card-title mb-4pt">Unlimited Access</div>
                                    <p class="card-subtitle text-70">Unlock Library and learn any topic with one subscription.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Barra informativa -->

                <div class="page-section border-bottom-2">
                    <div class="container page__container">

                        <div class="page-separator">
                            <div class="page-separator__text">From the blog</div>
                        </div>

                        <div class="row card-group-row">

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="{{ asset('images/paths/sketch_430x168.png')}}"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="{{ asset('images/256_luke-porter-261779-unsplash.jpg')}}"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">sketch</small>
                                            <a class="card-title"
                                               href="blog-post.html">Merge Duplicates Inconsistent Symbols</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="{{ asset('images/paths/invision_430x168.png')}}"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="{{ asset('images/256_michael-dam-258165-unsplash.jpg')}}"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">invision</small>
                                            <a class="card-title"
                                               href="blog-post.html">Design Systems Essentials</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="{{ asset('images/paths/photoshop_430x168.png')}}"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="{{ asset('images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">photoshop</small>
                                            <a class="card-title"
                                               href="blog-post.html">Semantic Logo Design</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="posts-cards">

                            <div class="card posts-card mb-0">
                                <div class="posts-card__content d-flex align-items-center flex-wrap">
                                    <div class="avatar avatar-lg mr-3">
                                        <a href="blog-post.html"><img src="{{ asset('images/paths/invision_200x168.png')}}"
                                                 alt="avatar"
                                                 class="avatar-img rounded"></a>
                                    </div>
                                    <div class="posts-card__title flex d-flex flex-column">
                                        <a href="blog-post.html"
                                           class="card-title mr-3">Design Systems Essentials</a>
                                        <small class="text-50">35 views last week</small>
                                    </div>
                                    <div class="d-flex align-items-center flex-column flex-sm-row posts-card__meta">
                                        <div class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center">
                                            <i class="material-icons text-muted-light mr-1">folder_open</i> inVision
                                        </div>
                                        <div class="mr-3 text-50 posts-card__date">
                                            <small>11 Nov, 2018 07:46 AM</small>
                                        </div>
                                        <div class="media ml-sm-auto align-items-center">
                                            <div class="media-left mr-2 avatar-group">

                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <img src="{{ asset('images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">
                                                </div>

                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <img src="{{ asset('images/256_michael-dam-258165-unsplash.jpg')}}"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">
                                                </div>

                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <img src="{{ asset('images/256_luke-porter-261779-unsplash.jpg')}}"
                                                         alt="Avatar"
                                                         class="avatar-img rounded-circle">
                                                </div>

                                            </div>
                                            <div class="media-body">

                                                <a href="">+2 more</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="page-section border-bottom-2">
                    <div class="container page__container">
                        <div class="page-separator">
                            <div class="page-separator__text">Learning Paths</div>
                        </div>

                        <div class="row card-group-row">

                            <div class="col-sm-4 card-group-row__col">

                                <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded mr-12pt z-0 o-hidden">
                                                        <div class="overlay">
                                                            <img src="../../public/images/paths/react_40x40@2x.png"
                                                                 width="40"
                                                                 height="40"
                                                                 alt="Angular"
                                                                 class="rounded">
                                                            <span class="overlay__content overlay__content-transparent">
                                                                <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                    <small class="h6 small text-white mb-0"
                                                                           style="font-weight: 500;">80%</small>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div class="card-title">React Native</div>
                                                        <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="student-path.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                        </div>

                                    </div>
                                </div>

                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/react_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title">React Native</div>
                                            <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                        </div>
                                    </div>

                                    <p class="mt-16pt text-70">Learn the fundamentals of working with React Native and how to create basic applications.</p>

                                    <div class="my-32pt">
                                        <div class="d-flex align-items-center mb-8pt justify-content-center">
                                            <div class="d-flex align-items-center mr-8pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="student-path.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-path.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <small class="text-50 mr-8pt">Your rating</small>
                                        <div class="rating mr-8pt">
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                        </div>
                                        <small class="text-50">4/5</small>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-4 card-group-row__col">

                                <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded mr-12pt z-0 o-hidden">
                                                        <div class="overlay">
                                                            <img src="../../public/images/paths/devops_40x40@2x.png"
                                                                 width="40"
                                                                 height="40"
                                                                 alt="Angular"
                                                                 class="rounded">
                                                            <span class="overlay__content overlay__content-transparent">
                                                                <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                    <small class="h6 small text-white mb-0"
                                                                           style="font-weight: 500;">80%</small>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div class="card-title">Dev Ops</div>
                                                        <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="student-path.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                        </div>

                                    </div>
                                </div>

                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/devops_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title">Dev Ops</div>
                                            <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                        </div>
                                    </div>

                                    <p class="mt-16pt text-70">Learn the fundamentals of working with Dev Ops and how to create basic applications.</p>

                                    <div class="my-32pt">
                                        <div class="d-flex align-items-center mb-8pt justify-content-center">
                                            <div class="d-flex align-items-center mr-8pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="student-path.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-path.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <small class="text-50 mr-8pt">Your rating</small>
                                        <div class="rating mr-8pt">
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                        </div>
                                        <small class="text-50">4/5</small>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-4 card-group-row__col">

                                <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded mr-12pt z-0 o-hidden">
                                                        <div class="overlay">
                                                            <img src="../../public/images/paths/redis_40x40@2x.png"
                                                                 width="40"
                                                                 height="40"
                                                                 alt="Angular"
                                                                 class="rounded">
                                                            <span class="overlay__content overlay__content-transparent">
                                                                <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                    <small class="h6 small text-white mb-0"
                                                                           style="font-weight: 500;">80%</small>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div class="card-title">Redis</div>
                                                        <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="student-path.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                        </div>

                                    </div>
                                </div>

                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/redis_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title">Redis</div>
                                            <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                        </div>
                                    </div>

                                    <p class="mt-16pt text-70">Learn the fundamentals of working with Redis and how to create basic applications.</p>

                                    <div class="my-32pt">
                                        <div class="d-flex align-items-center mb-8pt justify-content-center">
                                            <div class="d-flex align-items-center mr-8pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="student-path.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-path.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <small class="text-50 mr-8pt">Your rating</small>
                                        <div class="rating mr-8pt">
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                        </div>
                                        <small class="text-50">4/5</small>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row card-group-row mb-lg-8pt">

                            <div class="col-sm-4 card-group-row__col">

                                <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card mb-lg-0"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded mr-12pt z-0 o-hidden">
                                                        <div class="overlay">
                                                            <img src="../../public/images/paths/mailchimp_40x40@2x.png"
                                                                 width="40"
                                                                 height="40"
                                                                 alt="Angular"
                                                                 class="rounded">
                                                            <span class="overlay__content overlay__content-transparent">
                                                                <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                    <small class="h6 small text-white mb-0"
                                                                           style="font-weight: 500;">80%</small>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div class="card-title">MailChimp</div>
                                                        <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="student-path.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                        </div>

                                    </div>
                                </div>

                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/mailchimp_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title">MailChimp</div>
                                            <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                        </div>
                                    </div>

                                    <p class="mt-16pt text-70">Learn the fundamentals of working with MailChimp and how to create basic applications.</p>

                                    <div class="my-32pt">
                                        <div class="d-flex align-items-center mb-8pt justify-content-center">
                                            <div class="d-flex align-items-center mr-8pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="student-path.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-path.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <small class="text-50 mr-8pt">Your rating</small>
                                        <div class="rating mr-8pt">
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                        </div>
                                        <small class="text-50">4/5</small>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-4 card-group-row__col">

                                <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card mb-lg-0"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded mr-12pt z-0 o-hidden">
                                                        <div class="overlay">
                                                            <img src="../../public/images/paths/swift_40x40@2x.png"
                                                                 width="40"
                                                                 height="40"
                                                                 alt="Angular"
                                                                 class="rounded">
                                                            <span class="overlay__content overlay__content-transparent">
                                                                <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                    <small class="h6 small text-white mb-0"
                                                                           style="font-weight: 500;">80%</small>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div class="card-title">Swift</div>
                                                        <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="student-path.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                        </div>

                                    </div>
                                </div>

                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/swift_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title">Swift</div>
                                            <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                        </div>
                                    </div>

                                    <p class="mt-16pt text-70">Learn the fundamentals of working with Swift and how to create basic applications.</p>

                                    <div class="my-32pt">
                                        <div class="d-flex align-items-center mb-8pt justify-content-center">
                                            <div class="d-flex align-items-center mr-8pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="student-path.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-path.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <small class="text-50 mr-8pt">Your rating</small>
                                        <div class="rating mr-8pt">
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                        </div>
                                        <small class="text-50">4/5</small>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-4 card-group-row__col">

                                <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card mb-lg-0"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <div class="flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded mr-12pt z-0 o-hidden">
                                                        <div class="overlay">
                                                            <img src="../../public/images/paths/wordpress_40x40@2x.png"
                                                                 width="40"
                                                                 height="40"
                                                                 alt="Angular"
                                                                 class="rounded">
                                                            <span class="overlay__content overlay__content-transparent">
                                                                <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                    <small class="h6 small text-white mb-0"
                                                                           style="font-weight: 500;">80%</small>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <div class="card-title">WordPress</div>
                                                        <p class="flex text-50 lh-1 mb-0"><small>18 courses</small></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="student-path.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

                                        </div>

                                    </div>
                                </div>

                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/wordpress_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title">WordPress</div>
                                            <p class="text-50 d-flex lh-1 mb-0 small">18 courses</p>
                                        </div>
                                    </div>

                                    <p class="mt-16pt text-70">Learn the fundamentals of working with WordPress and how to create basic applications.</p>

                                    <div class="my-32pt">
                                        <div class="d-flex align-items-center mb-8pt justify-content-center">
                                            <div class="d-flex align-items-center mr-8pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="student-path.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-path.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <small class="text-50 mr-8pt">Your rating</small>
                                        <div class="rating mr-8pt">
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                            <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                        </div>
                                        <small class="text-50">4/5</small>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="page-section border-bottom-2">
                    <div class="container page__container">
                        <div class="page-separator">
                            <div class="page-separator__text">Design Courses</div>
                        </div>

                        <div class="row card-group-row">

                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="../../public/images/paths/sketch_430x168.png"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Preview</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-course.html">Learn Sketch</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <!-- <small class="text-50">6 hours</small> -->
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/sketch_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title mb-0">Learn Sketch</div>
                                            <p class="lh-1 mb-0">
                                                <span class="text-50 small">with</span>
                                                <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                    <div class="mb-16pt">
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                            </div>
                                        </div>
                                        <div class="col text-right">
                                            <a href="student-course.html"
                                               class="btn btn-primary">Watch trailer</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="../../public/images/paths/flinto_430x168.png"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Preview</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-course.html">Learn Flinto</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <!-- <small class="text-50">6 hours</small> -->
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/flinto_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title mb-0">Learn Flinto</div>
                                            <p class="lh-1 mb-0">
                                                <span class="text-50 small">with</span>
                                                <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                    <div class="mb-16pt">
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                            </div>
                                        </div>
                                        <div class="col text-right">
                                            <a href="student-course.html"
                                               class="btn btn-primary">Watch trailer</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="../../public/images/paths/photoshop_430x168.png"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Preview</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-course.html">Learn Photoshop</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <!-- <small class="text-50">6 hours</small> -->
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/photoshop_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title mb-0">Learn Photoshop</div>
                                            <p class="lh-1 mb-0">
                                                <span class="text-50 small">with</span>
                                                <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                    <div class="mb-16pt">
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                            </div>
                                        </div>
                                        <div class="col text-right">
                                            <a href="student-course.html"
                                               class="btn btn-primary">Watch trailer</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="../../public/images/paths/figma_430x168.png"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Preview</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-course.html">Learn Figma</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                            </div>
                                            <a href="student-course.html"
                                               data-toggle="tooltip"
                                               data-title="Add Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                        </div>
                                        <div class="d-flex">
                                            <div class="rating flex">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                            <!-- <small class="text-50">6 hours</small> -->
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-between">
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popoverContainer d-none">
                                    <div class="media">
                                        <div class="media-left mr-12pt">
                                            <img src="../../public/images/paths/figma_40x40@2x.png"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title mb-0">Learn Figma</div>
                                            <p class="lh-1 mb-0">
                                                <span class="text-50 small">with</span>
                                                <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                    <div class="mb-16pt">
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                            </div>
                                            <div class="d-flex align-items-center mb-4pt">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                            </div>
                                        </div>
                                        <div class="col text-right">
                                            <a href="student-course.html"
                                               class="btn btn-primary">Watch trailer</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="page-section">
                    <div class="container page__container">
                        <div class="page-headline text-center">
                            <h2>Feedback</h2>
                            <p class="lead measure-lead mx-auto text-70">What other students turned professionals have to say about us after learning with us and reaching their goals.</p>
                        </div>

                        <div class="position-relative carousel-card p-0 mx-auto">
                            <div class="row d-block js-mdk-carousel"
                                 id="carousel-feedback">
                                <a class="carousel-control-next js-mdk-carousel-control mt-n24pt"
                                   href="#carousel-feedback"
                                   role="button"
                                   data-slide="next">
                                    <span class="carousel-control-icon material-icons"
                                          aria-hidden="true">keyboard_arrow_right</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <div class="mdk-carousel__content">

                                    <div class="col-12 col-md-6">

                                        <div class="card card-feedback card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                            </blockquote>
                                        </div>
                                        <div class="media ml-12pt">
                                            <div class="media-left mr-12pt">
                                                <a href="student-profile.html"
                                                   class="avatar avatar-sm">
                                                    <!-- <img src="../../public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">UK</span>
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="student-profile.html"
                                                   class="card-title">Umberto Kass</a>
                                                <div class="rating mt-4pt">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-6">

                                        <div class="card card-feedback card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                            </blockquote>
                                        </div>
                                        <div class="media ml-12pt">
                                            <div class="media-left mr-12pt">
                                                <a href="student-profile.html"
                                                   class="avatar avatar-sm">
                                                    <!-- <img src="../../public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">UK</span>
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="student-profile.html"
                                                   class="card-title">Umberto Kass</a>
                                                <div class="rating mt-4pt">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-6">

                                        <div class="card card-feedback card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                                            </blockquote>
                                        </div>
                                        <div class="media ml-12pt">
                                            <div class="media-left mr-12pt">
                                                <a href="student-profile.html"
                                                   class="avatar avatar-sm">
                                                    <!-- <img src="../../public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle">UK</span>
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <a href="student-profile.html"
                                                   class="card-title">Umberto Kass</a>
                                                <div class="rating mt-4pt">
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- // END Header Layout Content -->

            <!-- Footer -->

            <div class="bg-white border-top-2 mt-auto">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon"
                             src="../../public/images/logo/black-70@2x.png"
                             width="30"
                             alt="Luma"> Luma
                    </p>
                    <p class="measure-lead-max text-50 small mr-8pt">Luma is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
                    <p class="mb-8pt d-flex">
                        <a href=""
                           class="text-70 text-underline mr-8pt small">Terms</a>
                        <a href=""
                           class="text-70 text-underline small">Privacy policy</a>
                    </p>
                    <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                </div>
            </div>

            <!-- // END Footer -->

        </div>
        <!-- // END Header Layout -->

        <!-- Drawer -->

        <div class="mdk-drawer js-mdk-drawer"
             id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
                     data-perfect-scrollbar>

                    <!-- Sidebar Content -->

                    <div class="d-flex align-items-center navbar-height">
                        <form action="index.html"
                              class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                            <input type="text"
                                   class="form-control pl-0"
                                   placeholder="Search">
                            <button class="btn"
                                    type="submit"><i class="material-icons">search</i></button>
                        </form>
                    </div>

                    <a href="index.html"
                       class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="{{ asset('images/illustration/student/128/white.svg')}}"
                                     class="img-fluid"
                                     alt="logo" /></span>

                        </span>

                        <span>Luma</span>
                    </a>

                    <div class="sidebar-heading">Student</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button"
                               href="index.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Browse Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="paths.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Browse Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-dashboard.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-my-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-paths.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                                <span class="sidebar-menu-text">My Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-path.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                                <span class="sidebar-menu-text">Path Details</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                                <span class="sidebar-menu-text">Course Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-lesson.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                                <span class="sidebar-menu-text">Lesson Preview</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-take-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                                <span class="sidebar-menu-text">Take Course</span>
                                <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-take-lesson.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                <span class="sidebar-menu-text">Take Lesson</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-take-quiz.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                                <span class="sidebar-menu-text">Take Quiz</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-quiz-results.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-quiz-result-details.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                                <span class="sidebar-menu-text">Quiz Result</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-path-assessment.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                <span class="sidebar-menu-text">Skill Assessment</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-path-assessment-result.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                                <span class="sidebar-menu-text">Skill Result</span>
                            </a>
                        </li>

                    </ul>
                    <div class="sidebar-heading">Instructor</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-dashboard.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                <span class="sidebar-menu-text">Instructor Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                <span class="sidebar-menu-text">Manage Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-quizzes.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                                <span class="sidebar-menu-text">Manage Quizzes</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-earnings.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                                <span class="sidebar-menu-text">Earnings</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-statement.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                                <span class="sidebar-menu-text">Statement</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-edit-course.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                                <span class="sidebar-menu-text">Edit Course</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-edit-quiz.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                <span class="sidebar-menu-text">Edit Quiz</span>
                            </a>
                        </li>

                    </ul>

                    <div class="sidebar-heading">Applications</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse"
                               data-toggle="collapse"
                               href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                Enterprise
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="erp-dashboard.html">
                                        <span class="sidebar-menu-text">ERP Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="crm-dashboard.html">
                                        <span class="sidebar-menu-text">CRM Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="hr-dashboard.html">
                                        <span class="sidebar-menu-text">HR Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="employees.html">
                                        <span class="sidebar-menu-text">Employees</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="staff.html">
                                        <span class="sidebar-menu-text">Staff</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="leaves.html">
                                        <span class="sidebar-menu-text">Leaves</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="departments.html">
                                        <span class="sidebar-menu-text">Departments</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#productivity_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                Productivity
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="productivity_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="projects.html">
                                        <span class="sidebar-menu-text">Projects</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="tasks-board.html">
                                        <span class="sidebar-menu-text">Tasks Board</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="tasks-list.html">
                                        <span class="sidebar-menu-text">Tasks List</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="kanban.html">
                                        <span class="sidebar-menu-text">Kanban</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#ecommerce_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                eCommerce
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="ecommerce_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ecommerce.html">
                                        <span class="sidebar-menu-text">Shop Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="edit-product.html">
                                        <span class="sidebar-menu-text">Edit Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#messaging_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                                Messaging
                                <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span>
                                <span class="sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="messaging_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="messages.html">
                                        <span class="sidebar-menu-text">Messages</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="email.html">
                                        <span class="sidebar-menu-text">Email</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#cms_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                CMS
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="cms_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="cms-dashboard.html">
                                        <span class="sidebar-menu-text">CMS Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="posts.html">
                                        <span class="sidebar-menu-text">Posts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#account_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                Account
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="account_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="pricing.html">
                                        <span class="sidebar-menu-text">Pricing</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="login.html">
                                        <span class="sidebar-menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="signup.html">
                                        <span class="sidebar-menu-text">Signup</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="signup-payment.html">
                                        <span class="sidebar-menu-text">Payment</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="reset-password.html">
                                        <span class="sidebar-menu-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="change-password.html">
                                        <span class="sidebar-menu-text">Change Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account.html">
                                        <span class="sidebar-menu-text">Edit Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account-profile.html">
                                        <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account-notifications.html">
                                        <span class="sidebar-menu-text">Email Notifications</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="edit-account-password.html">
                                        <span class="sidebar-menu-text">Account Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing.html">
                                        <span class="sidebar-menu-text">Subscription</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-upgrade.html">
                                        <span class="sidebar-menu-text">Upgrade Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-payment.html">
                                        <span class="sidebar-menu-text">Payment Information</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-history.html">
                                        <span class="sidebar-menu-text">Payment History</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="billing-invoice.html">
                                        <span class="sidebar-menu-text">Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#community_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                Community
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="community_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="teachers.html">

                                        <span class="sidebar-menu-text">Browse Teachers</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="student-profile.html">

                                        <span class="sidebar-menu-text">Student Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="teacher-profile.html">

                                        <span class="sidebar-menu-text">Teacher Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="blog.html">

                                        <span class="sidebar-menu-text">Blog</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="blog-post.html">

                                        <span class="sidebar-menu-text">Blog Post</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="faq.html">
                                        <span class="sidebar-menu-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="help-center.html">
                                        <!--  -->
                                        <span class="sidebar-menu-text">Help Center</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="discussions.html">
                                        <span class="sidebar-menu-text">Discussions</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="discussion.html">
                                        <span class="sidebar-menu-text">Discussion Details</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="discussions-ask.html">
                                        <span class="sidebar-menu-text">Ask Question</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="sidebar-heading">UI</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#components_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                Components
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="components_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-buttons.html">
                                        <span class="sidebar-menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-avatars.html">
                                        <span class="sidebar-menu-text">Avatars</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-forms.html">
                                        <span class="sidebar-menu-text">Forms</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-loaders.html">
                                        <span class="sidebar-menu-text">Loaders</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-tables.html">
                                        <span class="sidebar-menu-text">Tables</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-cards.html">
                                        <span class="sidebar-menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-icons.html">
                                        <span class="sidebar-menu-text">Icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-tabs.html">
                                        <span class="sidebar-menu-text">Tabs</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-alerts.html">
                                        <span class="sidebar-menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-badges.html">
                                        <span class="sidebar-menu-text">Badges</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-progress.html">
                                        <span class="sidebar-menu-text">Progress</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-pagination.html">
                                        <span class="sidebar-menu-text">Pagination</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="">
                                        <span class="sidebar-menu-text">Disabled</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#plugins_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                                Plugins
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="plugins_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-charts.html">
                                        <span class="sidebar-menu-text">Charts</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-flatpickr.html">
                                        <span class="sidebar-menu-text">Flatpickr</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-daterangepicker.html">
                                        <span class="sidebar-menu-text">Date Range Picker</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-dragula.html">
                                        <span class="sidebar-menu-text">Dragula</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-dropzone.html">
                                        <span class="sidebar-menu-text">Dropzone</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-range-sliders.html">
                                        <span class="sidebar-menu-text">Range Sliders</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-quill.html">
                                        <span class="sidebar-menu-text">Quill</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-select2.html">
                                        <span class="sidebar-menu-text">Select2</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-nestable.html">
                                        <span class="sidebar-menu-text">Nestable</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-fancytree.html">
                                        <span class="sidebar-menu-text">Fancy Tree</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-maps-vector.html">
                                        <span class="sidebar-menu-text">Vector Maps</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-sweet-alert.html">
                                        <span class="sidebar-menu-text">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="ui-plugin-toastr.html">
                                        <span class="sidebar-menu-text">Toastr</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled"
                                       href="">
                                        <span class="sidebar-menu-text">Disabled</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#layouts_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                Layouts
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="layouts_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Compact_App_Layout/index.html">
                                        <span class="sidebar-menu-text">Compact</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Mini_App_Layout/index.html">
                                        <span class="sidebar-menu-text">Mini</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Mini_Secondary_Layout/index.html">
                                        <span class="sidebar-menu-text">Mini + Secondary</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../App_Layout/index.html">
                                        <span class="sidebar-menu-text">App</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Boxed_App_Layout/index.html">
                                        <span class="sidebar-menu-text">Boxed</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="../Sticky_App_Layout/index.html">
                                        <span class="sidebar-menu-text">Sticky</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button"
                                       href="../Fixed_Layout/index.html">
                                        <span class="sidebar-menu-text">Fixed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- // END Sidebar Content -->

                </div>
            </div>
        </div>

        <!-- // END Drawer -->

        <!-- jQuery -->
        <script src="{{ asset('vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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

        
        <script>
            (function() {
                'use strict';
                var headerNode = document.querySelector('.mdk-header')
                var layoutNode = document.querySelector('.mdk-header-layout')
                var componentNode = layoutNode ? layoutNode : headerNode
                componentNode.addEventListener('domfactory-component-upgraded', function() {
                    headerNode.mdkHeader.eventTarget.addEventListener('scroll', function() {
                        var progress = headerNode.mdkHeader.getScrollState().progress
                        var navbarNode = headerNode.querySelector('#default-navbar')
                        navbarNode.classList.toggle('bg-transparent', progress <= 0.2)
                    })
                })
            })()
        </script>

    </body>

</html>