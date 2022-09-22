@extends('compte.agent.layout.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
          
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Courrier(s) enregistré(s)   
                                  
                                   <span id="date">  </span>
                                </h3>   
                                
                               
                                <div class="nk-block-des text-soft">
                                    <h6>{{Auth::user()->service->nom}}</h6>
                                    <h6>totale {{count($courriers)}}</h6>
                                    
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li><a href="{{route('courrier.create')}}" class="btn btn-white btn-outline-light"><em class="icon ni ni-plus"></em><span>Enregistrer un courrier</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div>
                    <div class="nk-block nk-block-lg">
                      <form action="{{route('courrier.sendToSecretariat')}}" method="POST">
                        @csrf
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                               
                                            </th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Numero</th>
                                            <th scope="col">Objet</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courriers as $c)
                                        <tr>       
                                            <th scope="row">
                                                <input type="checkbox" value="{{$c->id}}" name="courrier[]">
                                            </th>
                                            <td>{{$c->created_at}}</td>
                                            <td>{{$c->numero}}</td>
                                            <td>{{$c->objet}}</td>
                                            <td>
                                                <a href="{{route('courrier.detail',$c->id)}}">Details</span></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-inner">
                                <div class="nk-block-between-md g-3">
                                    <div class="g">
                                        <ul class="pagination justify-content-center justify-content-md-start">
                                          {{$courriers->links()}}
                                        </ul><!-- .pagination -->
                                    </div>
                                    <div class="g">
                                          
                                         <input type="checkbox" name="" id="send_all"> <label for="" id="labelinputsendall">Tout cocher</label>   
                                         <input  class="btn btn-light" type="submit" value="Envoyer au secretariat">
                                         <a href="javascript:history.back()" class="btn btn-light"> retour</a>
                                    </div><!-- .pagination-goto -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-preview -->
                      </form>
                    </div>
                  
        </div>
    </div>
</div>

@include('sweetalert::alert')
<script src="{{asset('user/assets/js/sendall.js')}}">
@endsection