@extends('compte.agent.layout.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
            
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Sélectionner le destinataire</h4>
                                <div class="nk-block-des">
                                    <p>Consigne : Remplissez et soumettez le formulaire pour finaliser l'envoie   </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Formulaire d'envoie</h5>
                                    <h5> Prêt à l'envoi {{count($courriers_list)}} courrier(s)</h5>
                                </div>
                                <form action="#" class="gy-3">
                                   
                                        
                                    
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="site-name">Sous-direction</label>
                                                <span class="form-note">SpecifIé la sous-direction </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <select class="form-select" id="destination_sd">
                                                    <option value=""></option>
                                                    @foreach ($sousdirections as $sd)
                                                        <option value="{{$sd->id}}">{{$sd->nom}}  
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Service</label>
                                                <span class="form-note">Specifié le service </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                              
                                                <div class="form-control-wrap">
                                                    <select class="form-select">
                                                        <option value=""></option>
                                                        @foreach ($services as $sv)
                                                        <option   value="{{$sv->id}}">{{$sv->nom}}</option>

                                                    @endforeach
                                            
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                 
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Agent(s) destinataire(s) </label>
                                                <span class="form-note">indiquer l'agent qui recevoir le courrier </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                               
                                                <ul class="custom-control-group g-3 align-center">
                                                    <li>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-card">
                                                            <label class="custom-control-label" for="pay-card">Card</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoin">
                                                            <label class="custom-control-label" for="pay-bitcoin">Bitcoin</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="pay-cash">
                                                            <label class="custom-control-label" for="pay-cash">Cash</label>
                                                        </div>
                                                    </li>
                                              
                                       
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Consigne  :</label>
                                                <span class="form-note">Entrer une consigne ( Facultatif)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <textarea class="form-control form-control-sm" id="cf-default-textarea" placeholder="Ecrire ici ..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="nk-block-between-md g-3">
                                              
                                                <div class="g">
              
                                                     <a href="http://localhost:8000/compte/admin/ag/courrier/registre/enregister/menu" class="btn btn-light"> retour</a>
                                                     <input class="btn btn-primary" type="submit" value="Envoyer">
                                                </div><!-- .pagination-goto -->
                                            </div>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- card -->
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>



@endsection