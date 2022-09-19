
<!doctype html>
<html lang="fr" data-layout="vertical" data-layout-style="detached" data-sidebar="light" data-topbar="dark" data-sidebar-size="lg">

<head>

    <meta charset="utf-8" />
    <title>MAIL APP </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="" />
    <meta content="" name="" />
    <!-- App favicon -->


    <!--Swiper slider css-->
    <link href="{{asset('admin/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('admin/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('admin/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example" style="background: white">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                   Mail App
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-15 active" href="#hero">Acceuil</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#reviews">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#team">Notre équipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#contact">Contacts</a>
                        </li>
                    </ul>

                    <div class="">
                        @guest
                      
                        <a href="{{route('login')}}" class="btn btn-primary">Connexion</a>      
                        @endguest
                        @auth

                        <a href="{{route('agent.dashboard.home')}}" class="btn btn-link fw-medium text-decoration-none text-dark">Tableau de bord</a>
                       
                        @can('is_admin')
                            
                        <a href="{{route('admin.dashboard.home')}}" class="btn btn-link fw-medium text-decoration-none text-dark">Espace Admin</a>
                        @endcan
                        <a href="auth-signup-basic.html" id="btn-logout" class="btn btn-primary">Déconnexion</a>
                         <form action="{{route('logout')}}" method="post" style="display: none" name="form-logout">
                          @csrf    
                        </form>   
                        @endauth
                      
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section pb-0 hero-section" style="background-color: white" id="hero">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center mt-lg-5 pt-5">
                            <h1 class="display-6 fw-semibold mb-3 lh-base">Bienvenue au service courrier</h1>
                            <p class="lead text-muted lh-base">Ministère de l'meploie et de la protection sociale</p>

                            <div class="d-flex gap-2 justify-content-center mt-4">
                                <a href="pages-pricing.html" class="btn btn-danger">Consulter mon courrier <i class="ri-eye-line align-middle ms-1"></i></a>
                            </div>
                        </div>

                        
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
         
            <!-- end shape -->
        </section>
        <!-- end hero section -->

        <!-- start client section -->
   
        <!-- end client section -->

        <!-- start services -->
      

  
      

   

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    @include('sweetalert::alert')
    <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admnin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins.js')}}"></script>

    <!--Swiper slider js-->
    <script src="{{asset('admin/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- landing init -->
    <script src="{{asset('admin/assets/js/pages/landing.init.js')}}"></script>
    <script src="{{asset('admin/assets/js/logout.js')}}"></script>
</body>

</html>