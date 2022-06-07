@extends("base")
@section("contenu")
          <center>  <img src="{{asset('/images/logo/medium-shot-colleagues-at-business-meeting-compressed.jpg')}}" class="img-fluid m-0 col-md-9" alt=""></center>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-around align-items-center">
                <a class="col-md-3 fs-5 w-100 " href="{{route('abonne.create')}}">
                        <h3>
                        <i class="fa-solid fa-user-group"></i>
                         Enregistrement d'abonnés
                        </h3>
                </a>
                <a class="col-md-3 w-100 fs-5 " href="{{route('abonne.index')}}">
                      <h3>
                        <i class="fa-solid fa-list-check"></i>
                            Listes des abonnés
                        </h3>
                </a>
            </div>
        </div>
    @endsection
   
