@extends('compte.agent.layout.master')
@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
              
              
                <div class="nk-block nk-block-lg content-center">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content text-center">
                            <h4 class="title nk-block-title">Courriers reçus </h4>
                            <p>Vous avez au total :  4000 courriers.</p>
                        </div>
                    </div>
                    <div class="row g-gs">

                        <div class="col-md-2"></div>
                     


                        <div class="col-md-4">
                            <div class="card card-bordered">
                                <img src="..." class="card-img-top" alt="">
                                <div class="card-inner text-center">
                                    <h5 class="card-title">Courriers du jours </h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="{{route('courrier_du_jour')}}" class="btn btn-primary">ouvrir</a>
                                </div>
                            </div>                 
    
                        </div>

                        <div class="col-md-4">
                            <div class="card card-bordered">
                                <img src="" class="card-img-top" alt="">
                                <div class="card-inner text-center">
                                    <h5 class="card-title">Listes des courriers reçus</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Ouvrir</a>
                                </div>
                            </div>                 
    
                        </div>

                        <div class="col-md-2"></div>
                    
                        
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>




@endsection