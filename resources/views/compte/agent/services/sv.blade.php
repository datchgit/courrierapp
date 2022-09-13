@extends('compte.layout.master')
@section("content")


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                 
                       
                  
                
                  
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Liste des services DRH</h4>
                                <div class="nk-block-des">
                                    <p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                   
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="default-01" placeholder="Entrer la recherche">
                                                    </div>
                                                </div>
                                            </div>

                                         
                                            <div class="col-md-8">                                            
                                                   <!-- Modal Trigger Code -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDefault">Ajouter </button>

                                                    <!-- Modal Content Code -->
                                                    <div class="modal fade" tabindex="-1" id="modalDefault">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Formulaire</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{route('sv.enregistrer')}}" method="POST" class="form-validate is-alter" >
                                                                       @csrf
                                                                       <div class="form-group">
                                                                        <label class="form-label">Sous-direction </label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select" name="sous_direction_id">
                                                                                <option value="">Sélectionner la sous-direction</option>
                                                                                @foreach ($sds as $sd)
                                                                                    <option value="{{$sd->id}}">{{$sd->nom}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                        <div class="form-group">
                                                                            <label class="form-label" for="full-name">Entrer le nom</label>
                                                                            <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="full-name" required="" name="nom" value="{{old('nom')}}">
                                                                            </div>
                                                                        </div>
                                                                     
                                                                       
                                                                       
    
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer bg-light">
                                                                    <span class="sub-text"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                     
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                           
                                            <th scope="col">Nom</th>
                                            <th scope="col">Total agents</th>
                                            <th scope="col">Sous-direction</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($svs as $sv)
                                      <tr>
                                     
                                        <td>{{$sv->nom}}</td>
                                        <td>{{count($sv->agents)}}</td>
                                        <td>{{$sv->sous_direction->nom}}</td>
                                        <td>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <ul class="link-list-opt no-bdr">
                                                    
                                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#modifDefault{{$sv->id}}"><em class="icon ni ni-edit"></em><span>Modifier</span></a></li>
                                                        <li><a href="{{route('sv.supprimer',$sv->id)}}"><em class="icon ni ni-check-round-cut"></em><span>Supprimer</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                              <!-- Modal Trigger Code -->
                                          

                                              <!-- Modal Content Code -->
                                              <div class="modal fade" tabindex="-1" id="modifDefault{{$sv->id}}">
                                                  <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                          <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                              <em class="icon ni ni-cross"></em>
                                                          </a>
                                                          <div class="modal-header">
                                                              <h5 class="modal-title">Formulaire</h5>
                                                          </div>
                                                          <div class="modal-body">
                                                              <form action="{{route('sv.modifier')}}" method="POST" class="form-validate is-alter" >
                                                                 @csrf

                                                                 <div class="form-group">
                                                                    <label class="form-label">Sous-direction </label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" name="sous_direction_id">
                                                                            <option value="{{$sv->sous_direction->id}}">{{$sv->sous_direction->nom}}</option>
                                                                            @foreach ($sds as $sd)
                                                                                @if(strcmp($sv->sous_direction->nom,$sd->nom)!=0)
                                                                                <option value="{{$sd->id}}">{{$sd->nom}}</option>
                                                                                @endif
                                                                              
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                          
                                                                  <div class="form-group">
                                                                     <input type="hidden" value="{{$sv->id}}" name="id">
                                                                      <label class="form-label" for="full-name">Entrer le nom</label>
                                                                      <div class="form-control-wrap">
                                                                          <input type="text" class="form-control" id="full-name" required="" name="nom" value="{{$sv->nom}}" >
                                                                      </div>
                                                                  </div>
                                                                
                                                                   
                                                               
                                                                 
                                                                 

                                                                  <div class="form-group">
                                                                      <button type="submit" class="btn btn-primary">Modifier</button>
                                                                  </div>
                                                              </form>
                                                          </div>
                                                          <div class="modal-footer bg-light">
                                                              <span class="sub-text"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>


                                        </td>
                                    </tr>   
                                      @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                     
                    </div><!-- .nk-block -->
                 
                  
                   
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')

@endsection