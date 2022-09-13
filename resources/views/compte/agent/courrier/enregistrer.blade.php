@extends('compte.layout.master')

@section('content')

<div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Users Lists</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 2,595 users.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Add User</span></a></li>
                                                                        <li><a href="#"><span>Add Team</span></a></li>
                                                                        <li><a href="#"><span>Import User</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group ">
                                                    <div class="card-tools">
                                                        <div class="form-inline flex-nowrap gx-3 blockaction">
                                                            <!--<div class="form-wrap w-150px">
                                                                <select class="form-select js-select2 select2-hidden-accessible" data-search="off" data-placeholder="Action" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                    <option value="" data-select2-id="3">Action</option>
                                                                    <option value="email">Soumettre au sécrétariat</option>
                                                                    <option value="group"></option>
                                                                    <option value="suspend"></option>
                                                                    <option value="delete"></option>
                                                                </select>
                                                            </div>-->
                                                            <div class="btn-wrap">
                                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-success" id="apply">Envoyer au sécretariat</button></span>
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
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                        <div class="dot dot-primary"></div>
                                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                                    </a>
                                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                        <div class="dropdown-head">
                                                                                            <span class="sub-title dropdown-title">Filtre Courrier</span>
                                                                                        </div>
                                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                                            <div class="row gx-6 gy-3">
                                                                                                <div class="col-6">
                                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                                        <input type="checkbox" class="custom-control-input" id="hasBalance">
                                                                                                        <label class="custom-control-label" for="hasBalance"> Have Balance</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="custom-control custom-control-sm custom-checkbox">
                                                                                                        <input type="checkbox" class="custom-control-input" id="hasKYC">
                                                                                                        <label class="custom-control-label" for="hasKYC"> KYC Verified</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Role</label>
                                                                                                        <select class="form-select js-select2 select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                                                                            <option value="any" data-select2-id="6">Any Role</option>
                                                                                                            <option value="investor">Investor</option>
                                                                                                            <option value="seller">Seller</option>
                                                                                                            <option value="buyer">Buyer</option>
                                                                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-haiw-container"><span class="select2-selection__rendered" id="select2-haiw-container" role="textbox" aria-readonly="true" title="Any Role">Any Role</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                                                        <select class="form-select js-select2 select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                                                                            <option value="any" data-select2-id="9">Any Status</option>
                                                                                                            <option value="active">Active</option>
                                                                                                            <option value="pending">Pending</option>
                                                                                                            <option value="suspend">Suspend</option>
                                                                                                            <option value="deleted">Deleted</option>
                                                                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-qal2-container"><span class="select2-selection__rendered" id="select2-qal2-container" role="textbox" aria-readonly="true" title="Any Status">Any Status</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <button type="button" class="btn btn-secondary">Filtrer</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-foot between">
                                                                                            <a class="clickable" href="#">Reset Filter</a>
                                                                                            <a href="#">Save Filter</a>
                                                                                        </div>
                                                                                    </div><!-- .filter-wg -->
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                        <em class="icon ni ni-setting"></em>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                                        <ul class="link-check">
                                                                                            <li><span>Show</span></li>
                                                                                            <li class="active"><a href="#">10</a></li>
                                                                                            <li><a href="#">20</a></li>
                                                                                            <li><a href="#">50</a></li>
                                                                                        </ul>
                                                                                        <ul class="link-check">
                                                                                            <li><span>Order</span></li>
                                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                                            <li><a href="#">ASC</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .dropdown -->
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
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Recherche par le matricule" id="searchinput">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <form method="POST" action="" name="form-submit">
                                                    @csrf
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                           <input type="checkbox" id="allchecked">
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Expéditeur </span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Matricule</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Numéro</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Total dossiers joints</span></div>

                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                    <ul class="link-tidy sm no-bdr">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox checked">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="bl">
                                                                                <label class="custom-control-label" for="bl">Balance</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox checked">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="ph">
                                                                                <label class="custom-control-label" for="ph">Phone</label>
                                                                            </div>
                                                                        </li>
                                                                     
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="st">
                                                                                <label class="custom-control-label" for="st">Statut</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                  
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                       
                                                             <input type="checkbox" class="check" name="courrier" value="">
                                                               
                                                          
                                                        </div>

                                                        <div class="nk-tb-col">
                                                            <a href="html/user-details-regular.html">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-warning">
                                                                        <span><em class="icon ni ni-user"></em></span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead"><span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span class="tb-amoun list-element"> </span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span></span>
                                                        </div>
                                                       
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success"></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                              
                                                          
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href=""><em class="icon ni ni-eye"></em><span>Voir + </span></a></li>
                                                                                <li><a href=""><em class="icon ni ni-edit"></em><span>Modifier</span></a></li>
                                                                              
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                     
                                               
                                                  
                                                </div><!-- .nk-tb-list -->
                                               </form>
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                   
                                                </div><!-- .nk-block-between -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
@endsection