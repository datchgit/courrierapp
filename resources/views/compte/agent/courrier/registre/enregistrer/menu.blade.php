@extends('compte.agent.layout.master')
@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
              
              
                <div class="nk-block nk-block-lg content-center">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content text-center">
                            <h4 class="title nk-block-title">Courriers enregistrer</h4>
                            <p>Vous avez au total :  4000 courriers.</p>
                        </div>
                    </div>
                    <div class="row g-gs">

                       <ul>
                        <li> <a href="">nouveau courrier  (4)</a> </li> 
                        <br>
                        
                        <li> <a href="{{route('courrier.registre_enregistrer_liste')}}">liste courrier (4)</a> </li>   
                    </ul>                   
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')
@endsection