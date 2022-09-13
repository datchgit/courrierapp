@extends('compte.admin.layout.master')
@section('content')

<div class="page-content" style="margin-top: 50px">
    
   
    <div class="row">
       
        <div class="col">

            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                Information compte
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                Historique de connexion
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                               Statistique courrier
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Info</h5>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th class="ps-0" scope="row">Nom & prenom :</th>
                                                <td class="text-muted">{{$user->nom}} {{$user->prenom}}</td>
                                            </tr>
                                            <tr>
                                                <th class="ps-0" scope="row">Matricule :</th>
                                                <td class="text-muted">{{$user->matricule}}</td>
                                            </tr>
                                            <tr>
                                                <th class="ps-0" scope="row">Service :</th>
                                                <td class="text-muted">{{$user->service->nom}}</td>
                                            </tr>
                                            <tr>
                                                <th class="ps-0" scope="row">Sous-direction :</th>
                                                <td class="text-muted">
                                                    {{$user->service->sousdirection->nom}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="ps-0" scope="row">Fonction</th>
                                                <td class="text-muted">{{$user->fonction}}</td>
                                            </tr>

                                            <tr>
                                                <th class="ps-0" scope="row">signature</th>
                                                <td class="text-muted">
                                                    
                                                    <a href="{{asset('agent/signature/'.$user->signature)}}">{{$user->signature}} </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th class="ps-0" scope="row">Rôle </th>
                                                <td class="text-muted">{{$user->role->nom}}</td>
                                            </tr>

                                            <tr>
                                                <th class="ps-0" scope="row">Date de création de compte</th>
                                                <td class="text-muted">{{$user->created_at}}</td>
                                            </tr>

                                            <tr>
                                                <th class="ps-0" scope="row">Dernière modification</th>
                                                <td class="text-muted">{{$user->updated_at}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                       
                                   
                                       <!-- Right Alignment -->
                                        <ul class="list-group list-group-horizontal-md justify-content-end">
                                            <li class="list-group-item">
                                                <a href="{{route('ag.list')}}" >Retour</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="{{route('ag.edit',$user->id)}}" >Modifier</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                              
                              
                            </div>
                        </div>
                        <!--end tab-pane-->
                        <div class="tab-pane" id="changePassword" role="tabpanel">
                        
                            <div class="mt-4 mb-3 border-bottom pb-2">
                                <div class="float-end">
                                    <a href="javascript:void(0);" class="link-primary"></a>
                                </div>
                                <h5 class="card-title">Historique </h5>
                            </div>
                           
                        </div>
                        <!--end tab-pane-->
                      
                        <!--end tab-pane-->
                        <div class="tab-pane" id="privacy" role="tabpanel">
                            <div class="mt-4 mb-3 border-bottom pb-2">
                                <div class="float-end">
                                    <a href="javascript:void(0);" class="link-primary"></a>
                                </div>
                                <h5 class="card-title">Statistique </h5>
                            </div>
                         
                        </div>
                        <!--end tab-pane-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection