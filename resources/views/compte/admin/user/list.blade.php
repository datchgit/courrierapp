@extends("compte.admin.layout.master")
@section('content')



<div class="page-content">

    <div class="row">

      <div class="col">

        <div class="card">
            <div class="card-header">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Liste des agents</h4>
                   
                    <!-- Grids in modals -->
                    <a href="{{route('register')}}" class="btn btn-primary">
                    Ajouter + 
                    </a>
                   
                </div>
            </div>

            <div class="card-body">
                <table class="table table-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom & prenom</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">Service</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                        <tr>
                            <th scope="row"><a href="#" class="fw-semibold">{{$u->id}}</a></th>
                            <td>{{$u->nom}} {{$u->prenom}}</td>
                            <td>{{$u->matricule}}</td>
                            <td>{{$u->service->nom}}</td>
                            <td>
                                <a href="{{route('ag.detail',$u->id)}}" class="link-success">Voir plus
                                <i class="ri-arrow-right-line align-middle"></i></a></td>
                        </tr>     
                        @endforeach
                       
                    
                       
                    </tbody>
                    
                </table>
            </div>

            <div class="footer">

            </div>
        </div>
      

      </div>

    </div>
</div>


@include('sweetalert::alert')




@endsection