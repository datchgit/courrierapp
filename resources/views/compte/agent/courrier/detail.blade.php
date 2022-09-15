@extends('compte.agent.layout.master')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Détail courrier / </h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline">
                                    <li>Service: <span class="text-base">{{{Auth::user()->service->nom}}}</span></li>
                                    <li>Sous-direction : <span class="text-base">{{{Auth::user()->service->sousdirection->nom}}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="javascript:history.back()" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
                            <a href="html/kyc-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row gy-5">

                        <div class="col-lg-7">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title title">Infos courriers</h5>
                                    
                                </div>
                            </div>
                            <div class="card card-bordered">
                                <ul class="data-list is-compact">
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Nom</div>
                                            <div class="data-value">{{$courrier->nom}}</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Prénom(s)</div>
                                            <div class="data-value">{{$courrier->prenom}}</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Matricule</div>
                                            <div class="data-value">{{$courrier->matricule}}</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label"> Objet courrier</div>
                                            <div class="data-value text-soft">{{$courrier->objet}}</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label"> Numero d'enregistrement</div>
                                            <div class="data-value text-soft">{{$courrier->numero}}</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Date d'enregistrement</div>
                                            <div class="data-value">{{$courrier->created_at}}</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Dernière modification</div>
                                            <div class="data-value">{{$courrier->updated_at}}</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Enregistrer  par :</div>
                                            <div class="data-value">{{$courrier->agentdrh->nom}}  {{$courrier->agentdrh->prenom}}</div>
                                        </div>
                                    </li>
                                
                                   
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Statut : </div>
                                            <div class="data-value text-break">{{$courrier->statut}}</div>
                                        </div>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-5">

                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title title"> Document(s) joint(s) {{ count($dossiers)}}</h5>
                                   
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="card card-bordered">
                                <ul class="data-list is-compact">
                                    @foreach ($dossiers as $dossier )
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">{{Str::limit( $dossier->contenu, 20, '...')}}</div>
                                            <div class="data-value"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDefault{{$dossier->id}}">ouvrir</button>
                                                
                                            </div>

                                            <!-- Modal Trigger Code -->

                                        <!-- Modal Content Code -->
                                        <div class="modal fade" tabindex="-1" id="modalDefault{{$dossier->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                    <div class="modal-header">
                                                        <span class="modal-title">Courrier :{{$courrier->numero}}-> dossier -> {{ $dossier->contenu}} </span>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <embed src="{{asset('courrier/dossiers/'.$dossier->contenu)}}" frameborder="0" width="100%" height="400px">
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <span class="sub-text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </li>      
                                    @endforeach
                                  
                                  
                                </ul>
                                {{$dossiers->links()}}
                            </div><!-- .card -->

                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title title">Historique courrier</h5>
                                   
                                </div>
                            </div>

                            <div class="card card-bordered">
                                <ul class="data-list is-compact">
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Submitted By</div>
                                            <div class="data-value">UD01489</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Submitted At</div>
                                            <div class="data-value">18 Dec, 2019 01:02 PM</div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Status</div>
                                            <div class="data-value"><span class="badge badge-dim badge-sm bg-outline-success">Approved</span></div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Last Checked</div>
                                            <div class="data-value">
                                                <div class="user-card">
                                                    <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Saiful Islam</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="data-item">
                                        <div class="data-col">
                                            <div class="data-label">Last Checked At</div>
                                            <div class="data-value">19 Dec, 2019 05:26 AM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                         
                          
                        </div><!-- .col -->
                     
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>


@endsection