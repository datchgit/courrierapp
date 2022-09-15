
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="..">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Page Title  -->
    <title>App courrier Tableau de bord</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('user/assets/css/dashlite.css?ver=3.0.3')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('user/assets/css/theme.css?ver=3.0.3')}}">
    @livewireStyles
</head>

<body class="nk-body  npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="html/hotel/index.html" class="logo-link nk-sidebar-logo">
                           <h3 class="text-light">App courrier</h3>
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{route('agent.dashboard.home')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text"> Acceuil</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking-fill"></em></span>
                                        <span class="nk-menu-text">Statistiques</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="html/hotel/bookings.html" class="nk-menu-link"><span class="nk-menu-text">All Bookings</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/hotel/booking-add.html" class="nk-menu-link"><span class="nk-menu-text">Add Booking</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/hotel/booking-edit.html" class="nk-menu-link"><span class="nk-menu-text">Edit Booking</span></a>
                                        </li>
                                    </ul>
                                </li><!-- .nk-menu-item -->
                                @can('is_agcourrier')
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                        <span class="nk-menu-text">Gestionnaire courrier</span>
                                    </a>
                                    <ul class="nk-menu-sub">

                                        <li class="nk-menu-item">
                                            <a href="{{route("courrier.create")}}" class="nk-menu-link"><span class="nk-menu-text">Formulaire Courrier</span></a>
                                        </li>
  
                                   

                                        <li class="nk-menu-item">
                                            <a href="{{route("courrier.registre")}}" class="nk-menu-link"><span class="nk-menu-text">Registre courrier</span></a>
                                        </li>

                          
                                    </ul>
                                </li><!-- .nk-menu-item -->
                                @else
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-mail"></em></span>
                                        <span class="nk-menu-text">Boîte à courrier</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/compte/admin/ag/courrier/boite/reception/menu" class="nk-menu-link"><span class="nk-menu-text">Courriers reçus</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/hotel/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Courriers reçus</span></a>
                                        </li>
                                       
                                    </ul>
                                </li><!-- .nk-menu-item -->
                                
                                @endcan
                            
                             
                                <li class="nk-menu-item">
                                    <a href="html/hotel/support.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                                        <span class="nk-menu-text">Messages </span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                               
    
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt"> <hr></h6>
                                </li><!-- .nk-menu-item -->
                                 <!-- .nk-menu-item -->
                                 <li class="nk-menu-item">
                                    <a href="html/hotel/customers.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                                        <span class="nk-menu-text">Profile</span>
                                    </a>
                                </li><!-- .nk-menu-item -->

                              
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                        <div class="nk-news-icon">
                                           
                                        </div>
                                        <div class="nk-news-text">
                                            <p>Ministère de l'emploi et de la protection sociale <span>Service courrier</span></p>
                                           
                                        </div>
                                    </a>
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status"> {{Auth::user()->role->nom}}</div>
                                                    <div class="user-name dropdown-indicator"> {{Auth::user()->nom}}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{Auth::user()->nom}} {{Auth::user()->prenom}}</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#" id="btn-logout"><em class="icon ni ni-signout"></em><span>Deconnexion</span></a></li>
                                                   <form name="form-logout" action="{{route('logout')}}" method="POST">
                                                   @csrf 
                                                  </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                  
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->

                @yield('content')
          
                <!-- content @e -->
                <!-- footer @s -->



                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; Tout droit reservés DRH </a>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
   
    <!-- JavaScript -->
    @livewireScripts
    <script src="{{asset('user/assets/js/bundle.js?ver=3.0.3')}}"></script>
    <script src="{{asset('user/assets/js/scripts.js?ver=3.0.3')}}"></script>
    <script src="{{asset('user/assets/js/charts/chart-hotel.js?ver=3.0.3')}}"></script>
    <script src="{{asset('admin/assets/js/logout.js')}}"></script>
    <script src="{{asset('admin/assets/js/selectservice.js')}}"></script>
  
</body>

</html>