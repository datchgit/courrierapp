@extends('compte.layout.master')
@section("content")


<div class="nk-content " data-select2-id="17">
                    <div class="container-fluid" data-select2-id="16">
                        <div class="nk-content-inner" data-select2-id="15">
                            <div class="nk-content-body" data-select2-id="14">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Liste Agents</h3>
                                            <div class="nk-block-des text-soft">
                                                <p> Total agent :  {{count($agents)}}. </p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                       
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group" data-select2-id="13">
                                                    <div class="card-tools" data-select2-id="12">
                                                        <div class="form-inline flex-nowrap gx-3" data-select2-id="11">
                                                          
                                                            <div class="btn-wrap">
                                                              
                                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                            </div>
                                                        </div><!-- .form-inline -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-tools me-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            <li>
                                                                <div class="toggle-wrap">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                                    <div class="toggle-content" data-content="cardTools">
                                                                        <ul class="btn-toolbar gx-1">
                                                                            <li class="toggle-close">
                                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                            </li><!-- li -->
                                                                            <li>
                                                                             
                                                                            </li><!-- li -->
                                                                            <li>
                                                                               
                                                                            </li><!-- li -->
                                                                        </ul><!-- .btn-toolbar -->
                                                                    </div><!-- .toggle-content -->
                                                                </div><!-- .toggle-wrap -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="recherche rapide">
                                                         
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist is-compact">
                                                    <div class="nk-tb-item nk-tb-head">
                                                      
                                                        <div class="nk-tb-col"><span class="sub-text">Nom & prénom </span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Rôle</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Matricule</span></div>
                                                       
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            <div class="dropdown">
                                                                
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->

                                                    @foreach ($agents as $ag)
                                                    <div class="nk-tb-item">
                                                       
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                
                                                                <div class="user-name">
                                                                    <span class="tb-lead">{{$ag->nom}} {{$ag->prenom}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span>{{$ag->matricule}}</span>
                                                        </div>
                                                      
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">
                                                                
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>Voir Details</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Modifier </span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-delete"></em><span>supprimer</span></a></li>
                                                                               
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->      
                                                    @endforeach
                                                  
                                                 
                                                   
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                  {{$agents->links()}}
                                                </ul><!-- .pagination -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>







@include('sweetalert::alert')

@endsection