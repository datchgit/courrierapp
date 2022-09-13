@extends('compte.admin.layout.master')

@section('content')

<div class="page-content">



    <div class="row">
        <div class="col">

            <div class="card">

                <div class="card-header">
                   <h4 class="text-center"> Formulaire d'inscription </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="firstNameinput" class="form-label"> Nom
                                        @error('nom')
                                        <small class="text-danger">{{$message}}</small>      
                                        @enderror
                                      
                                    </label>
                                    <input type="text" name="nom" class="form-control" value="{{old('nom')}}" id="firstNameinput">
                                </div>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="lastNameinput" class="form-label">Prenom
                                        @error('prenom')
                                        <small class="text-danger">{{$message}}</small>      
                                        @enderror
                                    </label>
                                    <input type="text"  name="prenom" class="form-control" value="{{old('prenom')}}" id="lastNameinput">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="compnayNameinput" class="form-label">Matricule
                                        @error('matricule')
                                        <small class="text-danger">{{$message}}</small>      
                                        @enderror
                                    </label>
                                    <input type="text"  name="matricule" class="form-control" value="{{old('matricule')}}" id="compnayNameinput">
                                </div>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phonenumberInput" class="form-label">Mot de passe
                                        @error('password')
                                        <small class="text-danger">{{$message}}</small>      
                                        @enderror
                                    </label>
                                    <input type="password"  name="password" class="form-control"  id="phonenumberInput">
                                </div>
                            </div><!--end col-->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="emailidInput" class="form-label">Confirmez le mot de passe</label>
                                    <input type="password" name="password_confirmation" class="form-control"  id="emailidInput">
                                </div>
                            </div><!--end col-->
                          
                   
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="ForminputState" class="form-label">Service
                                        @error('service')
                                        <small class="text-danger">{{$message}}</small>      
                                        @enderror
                                    </label>
                                    <select id="ForminputState" class="form-select"  name="service">
                                        <option> </option>
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
                                        @enderror
                                    </label>
                                    <select  class="form-select"  name="fonction">
                                        <option>  </option>
                                        <option value="agent">Agent</option>
                                        <option value="chef">Chef de service</option>
                                        <option value="sous_directeur">Sous directeur</option>
                                    </select>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12">
                                <div class="mb-3">
                                   <!-- Default File Input Example -->
                                    <div>
                                        <label for="formFile" class="form-label">Uploader la signature
                                            @error('signature')
                                            <small class="text-danger">{{$message}}</small>      
                                            @enderror
                                        </label>
                                        <input class="form-control"  name="signature" type="file" id="formFile" name="signature" accept=".png">
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12">
                                <!-- Base Radios -->

                                  <label for="">Attribuer un Rôle
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
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                    
                    </form>
                </div>
                <div class="card-footer">


                </div>
            </div>
         

        </div>
    </div>
   
</div>

@include('sweetalert::alert')

@endsection