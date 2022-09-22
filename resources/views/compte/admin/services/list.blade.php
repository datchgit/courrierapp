@extends('compte.admin.layout.master')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        @if(Session::get('add'))

        <div class="row">
            <div class="col">
                <!-- success Alert -->
            <div class="alert alert-success" role="alert">
                <strong> {{session('add')}} </strong> 
            </div>
        </div>
      
        @elseif(Session::get('update'))
        <div class="row">
            <div class="col">
                <!-- success Alert -->
            <div class="alert alert-warning" role="alert">
                <strong> {{session('update')}} </strong> 
            </div>
        </div>
        @else
                @error('nom')

                <div class="row">
                    <div class="col">
                        <!-- success Alert -->
                    <div class="alert alert-danger" role="alert">
                        <strong>Error: {{$message}} </strong> 
                    </div>
                </div>
                   
                @enderror

       @endif


        <div class="row">

            </div>
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Liste des services</h4>
                           
                            <!-- Grids in modals -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                            Ajouter + 
                            </button>
                            <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalgridLabel">Formulaire</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('sv.register')}}" method="POST">
                                                @csrf
                                                <div class="row g-3">
                                                    <div class="mb-3">
                                                        <div>
                                                            <label for="firstName" class="form-label">Nom 

                                                           
                                                                @error('nom')
                                                                <small class="text-danger">{{$message}}</small>       
                                                                @enderror
                                                            </label>
                                                            <input name="nom" type="text" class="form-control" id="firstName" placeholder="Entrer le nom ">
                                                        </div>
                                                    </div><!--end col-->

                                                    <div class="mb-3">
                                                       
                                                            <select name="sous_direction" class="form-select mb-3" aria-label="Default select example">
                                                                <option value="">Sous-direction</option>
                                                               @foreach ($sds as $sd)
                                                                   <option value="{{$sd->id}}">{{$sd->nom}}</option>
                                                               @endforeach
                                                            </select>
                                                       
                                                    </div>
                                                
                                                
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                           
                                <div class="table-responsive">
                                    <table class="table table-success table-striped align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Total service</th>
                        
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($svs as $sv)
                                                <tr>
                                                    <th scope="row">{{$sv->id}}</th>
                                                    <td>{{$sv->nom}}</td>
                                                
                                                    <td>{{$sv->sousdirection->nom}} </td>
                                                    <td>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <a href="javascript:void(0);" class="link-success fs-15" data-bs-toggle="modal" data-bs-target="#varyingcontentModal{{$sv->id}}" data-bs-whatever="@getbootstrap"><i class="ri-edit-2-line"></i></a>
                                                           

                                                            <!-- Varying Modal Content -->

                                                            <div class="modal fade" id="varyingcontentModal{{$sv->id}}" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalgridLabel">Formulaire</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="{{route('sv.update')}}" method="POST">
                                                                                @csrf
                                                                                <div class="row g-3">
                                                                                    <div class="mb-3">

                                                                                        <input type="hidden" name="id" value="{{$sv->id}}">
                                                                                        <div>
                                                                                            <label for="firstName" class="form-label">Nom 
                                
                                                                                           
                                                                                                @error('nom')
                                                                                                <small class="text-danger">{{$message}}</small>       
                                                                                                @enderror
                                                                                            </label>
                                                                                            <input value="{{$sv->nom}}" name="nom" type="text" class="form-control" id="firstName" placeholder="Entrer le nom ">
                                                                                        </div>
                                                                                    </div><!--end col-->
                                
                                                                                    <div class="mb-3">
                                                                                       
                                                                                            <select name="sous_direction" class="form-select mb-3" aria-label="Default select example">
                                                                                                <option selected value="{{$sv->sousdirection->id}}">{{$sv->sousdirection->nom}}</option>
                                                                                               @foreach ($sds as $sd)
                                                                                                  @if((strcmp($sv->sousdirection->nom,$sd->nom))!= 0)
                                                                                                   <option value="{{$sd->id}}">{{$sd->nom}}</option>
                                                                                                   @endif
                                                                                               @endforeach
                                                                                            </select>
                                                                                       
                                                                                    </div>
                                                                                
                                                                                
                                                                                    <div class="col-lg-12">
                                                                                        <div class="hstack gap-2 justify-content-end">
                                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                                                                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                                                                        </div>
                                                                                    </div><!--end col-->
                                                                                </div><!--end row-->
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          
                                                            <!-- Varying modal content -->
                                                          
                                                        </div>

                                                    </td>
                                                </tr>     
                                            @endforeach
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div><!-- end card-body -->
                    </div>
                </div>
            </div>
        </div>

      
    </div>
    <!-- container-fluid -->
</div>


@endsection
