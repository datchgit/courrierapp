@extends('compte.agent.layout.master')
@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
              
              
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="title nk-block-title">Registres courriers</h4>
                            <p>Vous avez au total :  4000 courriers.</p>
                        </div>

                        
                    </div>
                    <div class="row g-gs">
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="team">
                                      
                                        <div class="user-card user-card-s2">
                                            <svg style="height: 150px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                <g>
                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                    <path d="M29.6309,37.36a3.0236,3.0236,0,0,1-.86-2.39A4.3748,4.3748,0,0,1,32.9961,31h.0078a4.36,4.36,0,0,1,4.22,3.9121,3.0532,3.0532,0,0,1-.8545,2.4482A4.4158,4.4158,0,0,1,33.23,38.53c-.0771,0-.1533-.002-.23-.0049A4.519,4.519,0,0,1,29.6309,37.36ZM43.4668,40.1a1,1,0,1,0-.9336,1.77c.7207.38,1.4658,2.126,1.4668,4.39v1.7256a1,1,0,0,0,2,0V46.26C45.999,43.33,45.0049,40.9119,43.4668,40.1ZM40.165,37.3816c-.1445.084-.29.168-.4316.2549a1,1,0,0,0,.5215,1.8535.9887.9887,0,0,0,.52-.1465c.1289-.0781.2607-.1543.3916-.23a4.2311,4.2311,0,0,0,2.1465-2.124.9839.9839,0,0,0,.0313-.1045A3.8411,3.8411,0,0,0,40.5,32.52a1,1,0,1,0-.4922,1.9395,1.8773,1.8773,0,0,1,1.4,1.9092A2.835,2.835,0,0,1,40.165,37.3816ZM36.5,41h-7c-2.5234,0-4.5,2.7822-4.5,6.333V48.5a.8355.8355,0,0,0,.0588.2914.9731.9731,0,0,0,.3508.4946C26.4646,50.2812,29.4614,51,33,51s6.5353-.7187,7.59-1.7139a.9726.9726,0,0,0,.3509-.4949A.8361.8361,0,0,0,41,48.5V47.333C41,43.7822,39.0234,41,36.5,41Z" style="fill:#c67424"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <ul class="team-info">
                                            <li><span>Nom</span><span> Courrier  enregistrer</span></li>
                                        
                                            <li><span>Total </span><span> 444 </span></li>
                                        </ul>
                                        <div class="team-view">
                                            <a href="{{route('courrier.registre_enregistrer')}}" class="btn btn-block btn-dim btn-primary"><span>Voir les courriers </span></a>
                                        </div>
                                    </div><!-- .team -->
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                       


                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="team">
                                      
                                        <div class="user-card user-card-s2">
                                            <svg style="height: 150px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                <g>
                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                    <path d="M29.6309,37.36a3.0236,3.0236,0,0,1-.86-2.39A4.3748,4.3748,0,0,1,32.9961,31h.0078a4.36,4.36,0,0,1,4.22,3.9121,3.0532,3.0532,0,0,1-.8545,2.4482A4.4158,4.4158,0,0,1,33.23,38.53c-.0771,0-.1533-.002-.23-.0049A4.519,4.519,0,0,1,29.6309,37.36ZM43.4668,40.1a1,1,0,1,0-.9336,1.77c.7207.38,1.4658,2.126,1.4668,4.39v1.7256a1,1,0,0,0,2,0V46.26C45.999,43.33,45.0049,40.9119,43.4668,40.1ZM40.165,37.3816c-.1445.084-.29.168-.4316.2549a1,1,0,0,0,.5215,1.8535.9887.9887,0,0,0,.52-.1465c.1289-.0781.2607-.1543.3916-.23a4.2311,4.2311,0,0,0,2.1465-2.124.9839.9839,0,0,0,.0313-.1045A3.8411,3.8411,0,0,0,40.5,32.52a1,1,0,1,0-.4922,1.9395,1.8773,1.8773,0,0,1,1.4,1.9092A2.835,2.835,0,0,1,40.165,37.3816ZM36.5,41h-7c-2.5234,0-4.5,2.7822-4.5,6.333V48.5a.8355.8355,0,0,0,.0588.2914.9731.9731,0,0,0,.3508.4946C26.4646,50.2812,29.4614,51,33,51s6.5353-.7187,7.59-1.7139a.9726.9726,0,0,0,.3509-.4949A.8361.8361,0,0,0,41,48.5V47.333C41,43.7822,39.0234,41,36.5,41Z" style="fill:#c67424"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <ul class="team-info">
                                            <li><span>Nom</span><span> Courrier  imputer</span></li>
                                        
                                            <li><span>Total </span><span> 444 </span></li>
                                        </ul>
                                        <div class="team-view">
                                            <a href="html/user-details-regular.html" class="btn btn-block btn-dim btn-primary"><span>Voir les courriers </span></a>
                                        </div>
                                    </div><!-- .team -->
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                       
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>


@endsection