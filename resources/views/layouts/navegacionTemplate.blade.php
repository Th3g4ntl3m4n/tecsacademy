<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>tecsacademy</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- CDN boostrap -->
        <!-- CSS only -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

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
                 class="mdk-header js-mdk-header mb-0"
                 data-fixed
                 data-effects="">
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="index.html"
                           class="navbar-brand mr-16pt">
                            <!-- <img class="navbar-brand-icon" src="../../public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span><img src="{{ asset('images/tecsacademy/academy.png')}}"
                                         alt="logo"
                                         style="width: 80px;" class="img-fluid" /></span>

                            </span>

                            <!-- <span class="d-none d-lg-block">Luma</span> -->
                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt" style="padding-left:  50px;">
                            <li class="nav-item">
                                <a href="{{ route('home')}}"
                                   class="nav-link">Home</a>
                            </li>
                            <li class="nav-item dropdown active">
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
                                       class="dropdown-item active">Preview Lesson</a>
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
                                   data-caret="false">Tienda virtual</a>
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
                                   class="nav-link">Pricing</a>
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
                            <!--
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
                            -->
                        </ul>

                        @auth

                            <li class="nav-item">
                                    <a href="{{ route('dashboard')}}"
                                    class="btn btn-outline-white">Dashboard</a>
                                </li>
                            @else

                        <ul class="nav navbar-nav ml-auto mr-0">
                            <li class="nav-item">
                                <a href="login.html"
                                   class="nav-link"
                                   data-toggle="tooltip"
                                   data-title="Login"
                                   data-placement="bottom"
                                   data-boundary="window"><i class="material-icons">lock_open</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login')}}"
                                   class="btn btn-outline-white">Get Started</a>
                            </li>
                            @endauth
                        </ul>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            @yield('content')


            

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