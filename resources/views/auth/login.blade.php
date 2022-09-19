
<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="light" data-topbar="dark" data-sidebar-size="lg">

    <head>
        
        <meta charset="utf-8" />
        <title>Mail App  | connexion </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
      

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

    <body>

        <div class="auth-page-wrapper pt-5 ">
            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg "  id="auth-particles"  >
                <div class="bg-overlay"></div>
                
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div>
                                    <a href="index.html" class="d-inline-block auth-logo">
                                        <h1 class="text-light" style="font-weight: 700 ; text-transform:uppercase">Service courrier drh</h1>
                                    </a>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                            
                                <div class="card-body p-4"> 
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Formulaire de connexion !</h5>
                                     
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="{{route('login')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="matricule" class="form-label">Matricule
                                                    @error('matricule')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </label>
                                                <input type="text" class="form-control" name="matricule" placeholder="Entrer votre matricule">
                                            </div>
                    
                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="auth-pass-reset-basic.html" class="text-muted">Mot de passe oubliez ?</a>
                                                </div>
                                                <label class="form-label" for="password-input">Mot de passe : ( 8 charactères )
                                                    @error('password')
                                                       <small class="text-danger">{{$message}}</small> 
                                                    @enderror
                                                </label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" name="password" class="form-control pe-5" placeholder="Entrer votre Mot de passe" id="password-input">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                         
                                            
                                            <div class="mt-4">
                                                <button class="btn btn-light w-100" type="submit">Se connecter</button>
                                            </div>

                                          
                                        </form>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Vous n'avez pas de compte contactez l'administrateur ?  </p>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
         
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->

     
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
        <script src="{{asset('admin/assets/js/plugins.js')}}"></script>

        <!-- particles js -->
        <script src="{{asset('admin/assets/libs/particles.js/particles.js')}}"></script>
        <!-- particles app js -->
        <script src="{{asset('admin/assets/js/pages/particles.app.js')}}"></script>
        <!-- password-addon init -->
        <script src="{{asset('admin/assets/js/pages/password-addon.init.js')}}"></script>
       
    </body>

</html>