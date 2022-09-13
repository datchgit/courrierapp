@extends('compte.agent.layout.master')
@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Enregistrement courrier </h3>
                        </div><!-- .nk-block-head-content -->

                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li><a href="{{route('courrier.registre_enregistrer_liste')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-plus"></em><span>Liste Nouveau courrier enregistrer</span></a></li>
                                        
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block" data-select2-id="14">
                    <div class="card card-bordered" data-select2-id="13">
                        <div class="card-inner" data-select2-id="12">
                            <form action="{{route('courrier.store')}}" method="POST" enctype="multipart/form-data">   
                            <div class="row gy-4" data-select2-id="11">
                             
                               @csrf 
                              
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label class="form-label" for="first-name">Nom expéditeur
                                          
                                            @error('nom')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </label>
                                        <input type="text" class="form-control" id="first-name" placeholder=""  name="nom" value="{{old('nom')}}">
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label class="form-label" for="last-name">Prénom expéditeur
                                            @error('prenom')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </label>
                                        <input type="text" class="form-control" id="last-name"  name="prenom" value="{{old('prenom')}}">
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label class="form-label">Objet courrier
                                            @error('objet')
                                            <small class="text-danger">{{$message}}</small>
                                           @enderror
                                        </label>
                                        <input type="text" class="form-control" id="last-name"  name="objet" value="{{old('objet')}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Matricule expéditeur
                                            @error('matricule')
                                            <small class="text-danger">{{$message}}</small>
                                           @enderror
                                        </label>
                                        <input type="text" class="form-control" id="phone-no" placeholder="" name="matricule">
                                    </div>
                                </div>
                                <!--col-->
                             
                                <!--col-->
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label class="form-label" for="address">Numéro d'enregistrement 
                                            @error('numero')
                                            <small class="text-danger">{{$message}}</small>
                                           @enderror
                                        </label>
                                        <input type="number" class="form-control" id="address" placeholder="" name="numero"> 
                                    </div>
                                </div>
                                <!--col-->
                                <div class="col-md-6 col-lg-4 col-xxl-3">
                                    <div class="form-group">
                                        <label class="form-label">Uploader les documents joints </label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file" multiple="" class="form-file-input" id="customFile" value="[]" name="dossier[]" required>
                                                <label class="form-file-label" for="customFile">Choisir </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--col-->
                             
                                <!--col-->
                               
                                <!--col-->
                                <div class="col-md-12">
                                    <div class="upload-zone dropzone dz-clickable dz-started" data-max-files="1">
                                        <div class="dz-message" data-dz-message="">
                                            <span class="dz-message-text">Drag and drop file</span>
                                            <span class="dz-message-or">or</span>
                                            <button class="btn btn-primary">SELECT</button>
                                        </div>
                                    </div>
                                </div>

                                     <!--col-->
                                     <div class="col-md-6 col-lg-4 col-xxl-3">
                                        <div class="form-group">
                                            <label class="form-label" for="address">Enregistrer par  : {{Auth::user()->nom}}  {{Auth::user()->prenom}}</label>
                                            <input type="hidden" class="form-control" id="address" value="{{Auth::user()->id}}" name="agent" >
                                        </div>
                                    </div>
                                    <!--col-->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                                <!--col-->
                         
                            </div>
                            </form> 
                            <!--row-->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')
@endsection