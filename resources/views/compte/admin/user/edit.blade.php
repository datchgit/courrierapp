@extends('compte.admin.layout.master')
@section('content')


<div class="page-content">
    <div class="container-fluid" style="margin-top: 50px">

       

        <div class="row">
         
            <!--end col-->
            <div class="col-xxl-">
                <div class="card mt-xxl-n5">
                    <div class="card-header">
                        <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                   Modification  Informations personnelle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab" aria-selected="false">
                                    Modification de Mot de passe
                                </a>
                            </li>
                        
                          
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane" id="personalDetails" role="tabpanel">
                                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label"> Nom
                                                    @error('nom')
                                                    <small class="text-danger">{{$message}}</small> 
                                                    @else
                                                    <small>    :  {{$user->nom}}</small>     
                                                     
                                                    @enderror
                                                  
                                                </label>
                                                <input type="text" name="nom" class="form-control"  id="firstNameinput">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="lastNameinput" class="form-label">Prenom
                                                    @error('prenom')

                                                    <small class="text-danger">{{$message}}</small>  
                                                    @else
                                                    <small>    :  {{$user->prenom}}</small>     
                                                      
                                                    @enderror
                                                </label>
                                                <input type="text"  name="prenom" class="form-control"  id="lastNameinput">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="compnayNameinput" class="form-label">Matricule
                                                    @error('matricule')
                                                    <small class="text-danger">{{$message}}</small>  
                                                    @else
                                                    <small> : {{$user->matricule}}</small>    
                                                    @enderror
                                                </label>
                                                <input type="text"  name="matricule" class="form-control"  id="compnayNameinput">
                                            </div>
                                        </div><!--end col-->
                                 
                               
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="ForminputState" class="form-label">Service
                                                    @error('service')
                                                    <small class="text-danger">{{$message}}</small>  
                                                    @else
                                                    <small> : {{$user->service->nom}}</small>     
                                                    @enderror
                                                </label>
                                                <select id="ForminputState" class="form-select"  name="service">
                                                   
                                                    <option value="">Choisir....</option>
                                                    @foreach ($svs as $sv)
                                                       
                                                        <option value="{{$sv->id}}">{{$sv->nom}}</option>     
                                                       
                                                       
                                                    @endforeach
                                                 
                                                </select>
                                            </div>
                                        </div><!--end col-->
            
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="ForminputState" class="form-label">Fonction
                                                    @error('fonction')
                                                    <small class="text-danger">{{$message}}</small> 
                                                    @else

                                                    <span>    : {{$user->fonction}}</span>      
                                                    @enderror
                                                </label>
                                                <select id="ForminputState" class="form-select"  name="fonction">
                                                    <option>Choisir...</option>
                                                    <option value="agent">Agent</option>
                                                    <option value="chef">Chef de service</option>
                                                    <option value="sous_directeur">Sous directeur</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
            
                                        <div class="col-12">
                                            <div class="mb-3">
                                               <!-- Default File Input Example -->
                                                <div>
                                                    <label for="formFile" class="form-label">Uploader la signature
                                                        @error('signature')
                                                        <small class="text-danger">{{$message}}</small> 
                                                        @else
                                                        <small>    :  {{$user->signature}}</small>     
                                                        @enderror
                                                    </label>
                                                    <input class="form-control"  name="signature" type="file" id="formFile" name="signature" accept=".png">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <label for="">Attribuer un Rôle : {{$user->role->nom}}
                                                @error("role")
                                                    <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </label>
                                                 @foreach ($roles as $r)
                                                 <div class="form-check mb-2">
                                                     <input class="form-check-input" value="{{$r->id}}" type="radio" name="role" id="flexRadioDefault1">
                                                     <label class="form-check-label" for="flexRadioDefault1">
                                                        {{$r->nom}}
                                                     </label>
                                                 </div>        
                                                 @endforeach
                                        </div>
                                      
                                        <div class="col-lg-12">
                                          
                                                 <!-- Right Alignment -->
                                        <ul class="list-group list-group-horizontal-md justify-content-end">
                                            <li class="list-group-item">
                                                <a href="{{route('ag.detail',$user->id)}}" >Retour</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="{{route('ag.detail',$user->id)}}" >Modifier</a>
                                            </li>
                                           
                                        </ul>
                                        </div><!--end col-->
                                    </div><!--end row-->
            
                                
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="changePassword" role="tabpanel">
                                <form action="javascript:void(0);">
                                    <div class="row g-2">
                                      
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="newpasswordInput" class="form-label">Nouveau 
                                                    Password*</label>
                                                <input type="password" class="form-control" id="newpasswordInput" placeholder="Entrer votre mot de passe">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="confirmpasswordInput" class="form-label">Confirmez
                                                    Password*</label>
                                                <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirmez votre de passe">
                                            </div>
                                        </div>
                                        <!--end col-->
                                      
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <ul class="list-group list-group-horizontal-md justify-content-end">
                                                <li class="list-group-item">
                                                    <a href="{{route('ag.detail',$user->id)}}" >Retour</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="{{route('ag.detail',$user->id)}}" >Modifier</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                              
                              
                            </div>
                         
                          
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
</div>




@endsection