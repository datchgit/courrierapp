@extends('compte.agent.layout.master')

@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Courrier enregistrer du 
                              
                               <span id="date"> </span>
                            </h3>   
                            
                           
                            <div class="nk-block-des text-soft">
                                <h6>total courriers  :  {{count($courriers)}}.</h6>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li><a href="{{route('courrier.create')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-plus"></em><span>Nouveau courrier</span></a></li>
                                        
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <form class="card-inner-group" action="{{route('courrier.selectCourrier')}}"  method="POST">
                            @csrf
                            <input type="hidden" name="operation" value="envoyer au secretariat">
                            <div class="card-inner position-relative card-tools-toggle">
                                <div class="card-title-group">
                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                          
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
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder=" recherhcer par le numero  d'enregistrement">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                               
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">
                                      
                                        Expéditeur</span></div>
                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Numero</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Matricule</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">statut</span></div>
                                       
                                      
                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                            <div class="dropdown">
                                              
                                            </div>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                 
                                   
                                    @foreach ($courriers as $c)
                                   
                                  
                                    <div class="nk-tb-item" >
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" value="{{$c->id}}" name="courrier[]">
                                            </div>
                                        </div>
                                        <div class="nk-tb-col">
                                            {{$c->nom}}  {{$c->prenom}}
                                        </div>
                                        <div class="nk-tb-col tb-col-mb">
                                            {{$c->numero}}
                                        </div>
                                        <div class="nk-tb-col tb-col-md">
                                            {{$c->matricule}}
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <ul class="list-status">
                                               <li class="text-success">{{$c->statut}} </li> 
                                            </ul>
                                        </div>
                                     
                                  
                                        <div class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                             
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                
                                                                <li><a href="{{route('courrier.detail',$c->id)}}"><em class="icon ni ni-eye"></em><span> Details</span></a></li>
                                                              
                                                                <li class="divider"></li>

                                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>supprimer</span></a></li>
                                                             
                                                              
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                       
                                  
                                    @endforeach
                                  
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                          {{$courriers->links()}}
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                          
                                         <input type="checkbox" name="" id="send_all"> <label for="" id="labelinputsendall">Tout sélectionner</label>   
                                         <input  class="btn btn-light" type="submit" value="Envoyer">
                                         <a href="javascript:history.back()" class="btn btn-light"> retour</a>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </form><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

<script src="{{asset('user/assets/js/sendall.js')}}">

</script>

@endsection