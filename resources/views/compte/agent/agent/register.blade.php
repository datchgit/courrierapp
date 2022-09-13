@extends('compte.layout.master')
@section('content')



<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                 
                 
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Création de compte </h4>
                                <div class="nk-block-des">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Formulaire d'inscription</h5>
                                </div>
                                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name-1">Nom
                                           
                                                    @error('nom')
                                                    <small class="text-danger">{{ $message }}</small>             
                                                    @enderror
                                                </label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="full-name-1" name="nom" value="{{old('nom')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="email-address-1">Prénom(s)
                                                    @error('prenom')
                                                    <small class="text-danger">{{ $message }}</small>             
                                                    @enderror
                                                </label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="email-address-1" name="prenom" value="{{old('prenom')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Matricule
                                                    @error('matricule')
                                                    <small class="text-danger">{{ $message }}</small>             
                                                    @enderror
                                                </label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="phone-no-1" value="{{old('matricule')}}" name="matricule">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="customFileLabel">Signature
                                                    @error('signature')
                                                    <small class="text-danger">{{ $message }}</small>             
                                                    @enderror    
                                                </label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" name="signature" class="form-file-input" id="customFile" value="{{old('signature')}}" accept=".png">
                                                        <label class="form-file-label" for="customFile">Sélectionner la signature

                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Service 
                                                    @error('service')
                                                    <small class="text-danger">{{ $message }}</small>             
                                                    @enderror
                                                </label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select" name="service">
                                                        <option value="">Sélectionner votre service</option>
                                                        @foreach ($services as $sv)
                                                            <option value="{{$sv->id}}">{{$sv->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Fonction
                                                    @error('fonction')
                                                    <small class="text-danger">{{ $message }}</small>             
                                                    @enderror
                                                </label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select"  name="role">
                                                        <option value=""></option>
                                                        <option value="agent">AGENT </option>
                                                        <option value="chef de service">CHEF DE SERVICE</option>
                                                        <option value="sous-directeur">SOUS DIRECTEUR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no-1">Mot de passe
                                                    @error('password')
                                                    <small class="text-danger">{{ $message }}</small>             
                                                    @enderror
                                                </label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" id="phone-no-1" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="pay-amount-1">Confirmez le mot de passe</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" id="pay-amount-1" name="password_confirmation">
                                                </div>
                                            </div>
                                        </div>

                                     
                                   
                                     
                                     
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Inscription</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                 
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>


@include('sweetalert::alert')

@endsection