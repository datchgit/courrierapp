@extends('compte.layout.master')

@section('content')

<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                    <h4 class="nk-block-title fw-normal" style="margin-top: 10%">Espace enregistrement </h4>
                    <div class="nk-block-des">
                        <p class="lead">consignes : Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet facilis aliquam eos! Earum laborum, totam delectus aliquam omnis voluptatum tempora quibusdam necessitatibus architecto, maiores exercitationem sed nostrum, odio est quaerat!</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-lg">
                <div class="card card-bordered">
                    <form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="" method="POST" id="stepper-create-project" data-step-current="first" novalidate="novalidate" style="display: block;" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-0 col-sep col-sep-md col-sep-xl">
                            <div class="col-md-4 col-xl-4">
                                <div class="card-inner">
                                    <ul class="nk-stepper-nav nk-stepper-nav-s1 stepper-nav is-vr">
                                        <li class="current">
                                            <div class="step-item">
                                                <div class="step-text">
                                                    <div class="lead-text">Expéditeur</div>
                                                    <div class="sub-text">Renseigner les informations à propos de l'expéditeur</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="step-item">
                                                <div class="step-text">
                                                    <div class="lead-text">Courriers</div>
                                                    <div class="sub-text">Renseigner les informations relatitif au courrier</div>
                                                </div>
                                            </div>
                                        </li>
                                    
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="card-inner">
                                    <div class="nk-stepper-content">
                                        <div class="nk-stepper-steps stepper-steps">
                                            <div class="nk-stepper-step active">
                                                <h5 class="title mb-3">Infos expéditeur</h5>
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" f>Matricule</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"  name="matricule" value="{{old('matricule')}}" >
                                                            </div>
                                                            @error('matricule')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="cp1-project-name">Nom</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"  name="nom" value="{{old('nom')}}" >
                                                            </div>
                                                            @error('nom')
                                                            <span  class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="cp1-project-name">Prénom</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"  name="prenom" value="{{old('prenom')}}">
                                                            </div>
                                                            @error('prenom')
                                                            <span  class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                 
                                                  
                                                </div>
                                            </div>
                                            <div class="nk-stepper-step">
                                                <h5 class="title mb-4">Infos courriers</h5>
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="cp1-project-name">Objet</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"  name="objet" value="{{old('objet')}}" >
                                                                @error('objet')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="customMultipleFilesLabel">Sélectionner les dossiers joints</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-file">
                                                                    <input type="file" name="dossier[]" multiple class="form-file-input" id="customMultipleFiles" accept=".pdf">
                                                                    <label class="form-file-label" for="customMultipleFiles">format réquis pdf</label>
                                                                    @error('dossier')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="cp1-project-name">Numéro d'enregistrement</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"  name="num_enregistrement"  value="{{old('num_enregistrement')}}">
                                                                @error('num_enregistrement')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                 
                                                  
                                                </div>
                                            </div>
                                        
                                          
                                        </div>
                                        <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                            <li class="step-prev" style="display: none;"><button class="btn btn-dim btn-primary">Précédant</button></li>
                                            <li class="step-next" style="display: block;"><button class="btn btn-primary">Suivant</button></li>
                                            <li class="step-submit" style="display: none;"><input class="btn btn-primary" type="submit" value="Enregistrer"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- .nk-block -->
        </div><!-- .components-preview -->
    </div>
</div>
@include('sweetalert::alert')

@endsection