
@php

$user_type= Auth::user()->type;

@endphp

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard - TecsAcademy</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
              href="{{asset('css/fontawesome.css')}}"
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

    <!--
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
-->
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
                 class="mdk-header js-mdk-header mb-0"
                 data-fixed
                 data-effects="">
                <div class="mdk-header__content">

                    <!-- Navbar -->

                    <div class="navbar navbar-expand pr-0 navbar-dark-pickled-bluewood navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar Toggler -->

                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- // END Navbar Toggler -->

                        <!-- Navbar Brand -->

                        <a href="{{route('home')}}"
                           class="navbar-brand mr-16pt">

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span><img src="{{ asset('images/tecsacademy/academy.png')}}"
                                         alt="logo"
                                         style="width:80px" class="img-fluid" /></span>

                            </span>

                           <!-- <span class="d-none d-lg-block"><img src="{{ asset('images/illustration/student/128/white.svg')}}"
                                         alt="logo"
                                         class="img-fluid" /></span> -->
                        </a>

                        <!-- // END Navbar Brand -->

                        <span class="d-none d-md-flex align-items-center mr-16pt">

                            <span class="avatar avatar-sm mr-12pt">

                                <!-- <span class="avatar-title rounded navbar-avatar"><i class="material-icons">opacity</i></span> -->

                            </span>
                            <!--

                            <small class="flex d-flex flex-column">
                                <strong class="navbar-text-100">Experience IQ</strong>
                                <span class="navbar-text-50">2,300 points</span>
                            </small>

                                -->
                        </span>

                        <!-- Navbar Search -->

                        <form class="search-form navbar-search d-none d-md-flex mr-16pt"
                              action="{{route('home')}}">
                            <button class="btn"
                                    type="submit"><i class="material-icons">search</i></button>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Search ...">
                        </form>

                        <!-- // END Navbar Search -->

                        <div class="flex"></div>

                        <!-- Navbar Menu -->

                        <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">                         
                            <span class="navbar-text-100"><a class="navbar-text-100" href="{{ route('profile')}}">{{ auth()->user()->name}}</span>                           
                        </div>
                        <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">
                            <a class="navbar-text-100" href="{{ route('logout')}}">Logout</a>
                        </div>

                      
                       


                        <!-- // END Navbar Menu -->

                    </div>

                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

<div class="container">



@yield('content')



</div>

</div>

<!-- Footer -->

<div class="bg-white border-top-2 mt-auto">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon"
                             src="{{ asset('images/tecsacademy/academy.png')}}"
                             width="30"
                             alt=""> TecsAcademy
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

                    <a href="{{route('home')}}"
                       class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title "><img src="{{('images/tecsacademy/academy.png')}}"
                                     class="img-fluid"
                                     alt="logo" /></span>

                        </span>

<!-- nav list slider -->


<span>TecsAcademy</span>
                    </a>

                    (@switch($user_type)
            @case(0)
            <div class="sidebar-heading">Administrador</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
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
                                <span class="sidebar-menu-text">Crear Estudiante</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="paths.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Crear Profesor</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button"
                               href="student-dashboard.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                <span class="sidebar-menu-text">Crear Consultor</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="{{ route('formProductRegister')}}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">Crear curso</span>
                            </a>
                        </li>
                      

                    </ul>
            @break
            @case(1)

            <div class="sidebar-heading">Student</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
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
                        <li class="sidebar-menu-item active">
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
            @break
            @case(2)
                
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
            @break
            @case(3)                
                    
            <div class="sidebar-heading">CONSULTORES</div>
                    <ul class="sidebar-menu">

                    <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="{{ route('home')}}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse"
                               data-toggle="collapse"
                               href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                Students
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="{{ route('showallusers')}}">
                                        <span class="sidebar-menu-text">New Students</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="{{route('consultantSells')}}">
                                        <span class="sidebar-menu-text">Sales</span>
                                    </a>
                                </li>                          
                            </ul>
                        </li>
                    </ul>
            @break  
            
            @case(4)                
                    
            <div class="sidebar-heading">CONTADOR</div>
                    <ul class="sidebar-menu">

                    <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="{{ route('home')}}">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse"
                               data-toggle="collapse"
                               href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                Modulo de pagos
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="{{ route('counterView')}}">
                                        <span class="sidebar-menu-text">Pagos Pendientes</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="{{ route('counterAprobed')}}">
                                        <span class="sidebar-menu-text">Pagos Aprobados</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="{{route('counterAllPays')}}">
                                        <span class="sidebar-menu-text">Total pagos recibidos</span>
                                    </a>
                                </li>
                 
                            </ul>
                        </li>
                    </ul>
            @break            
            @default
                @include('auth.login')
        @endswitch
                    
                    <!-- // END Sidebar Content -->

                </div>
            </div>
        </div>

        <!-- // END Drawer -->

        <!-- jQuery -->
        <script src="{{ asset('vendor/jquery.min.js')}}"></script>

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

        <!-- Global Settings -->
        <script src="{{ asset('js/settings.js')}}"></script>

        <!-- Flatpickr -->
        <script src="{{ asset('vendor/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{ asset('js/flatpickr.js')}}"></script>

        <!-- Moment.js -->
        <script src="{{ asset('vendor/moment.min.js')}}"></script>
        <script src="{{ asset('vendor/moment-range.js')}}"></script>

        <!-- Chart.js -->
        <script src="{{ asset('vendor/Chart.min.js')}}"></script>
        <script src="{{ asset('js/chartjs.js')}}"></script>

        <!-- Chart.js Samples -->
        <script src="{{ asset('js/page.student-dashboard.js')}}"></script>

        <!-- List.js -->
        <script src="{{ asset('vendor/list.min.js')}}"></script>
        <script src="js/list.js"></script>

        <!-- Tables -->
        <script src="{{ asset('js/toggle-check-all.js')}}"></script>
        <script src="{{ asset('js/check-selected-row.js')}}"></script>

    </body>

</html>