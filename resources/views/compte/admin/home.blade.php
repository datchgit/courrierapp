@extends('compte.admin.layout.master')
@section('content')


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1"> Espace Administrateur !

                                       
                                           Date :  <script>document.write(new Date())</script>
                                      
                                    </h4>
                               
                                </div>
                               
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p
                                                class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Nombres d'utilisateurs</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                          
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                    class="counter-value" data-target="559.25">0</span>
                                            </h4>
                                            <a href="{{route('ag.list')}}" class="text-decoration-underline">Afficher la liste</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-primary rounded fs-3">
                                                <i class="bx bx-user text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p
                                                class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                ultisateurs Connectés</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                          
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                    class="counter-value" data-target="36894">0</span></h4>
                                            <a href="" class="text-decoration-underline">Afficher la liste</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info rounded fs-3">
                                                <i class="bx bx-shopping-bag text-info"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p
                                                class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Courrier historique</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                        
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                    class="counter-value" data-target="183.35">0</span>
                                            </h4>
                                            <a href="" class="text-decoration-underline">Afficher la liste</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-primary rounded fs-3">
                                                <i class="bx bx-user-circle text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p
                                                class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Mon </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                           
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                    class="counter-value" data-target="165.89">0</span>
                                            </h4>
                                            <a href="" class="text-decoration-underline"> Afficher la liste</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info rounded fs-3">
                                                <i class="bx bx-wallet text-info"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->

                </div> <!-- end .h-100-->

            </div> <!-- end col -->
 
        </div>

    </div>
    <!-- container-fluid -->
</div>



@endsection