@extends("base")
@section("contenu")

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <center><h3 class="border-bottom pb-2 mb-4">LISTE des Abonnés</h3></center>
    <div mt-4>
    @if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
        <div class="d-flex  justify-content-end mb-4">
        <a href="{{  route('abonne.create')}}" class="btn btn-primary">Ajouter un nouveau abonné</a>
        </div>
    <table class="table table-bordered table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Naissance</th>
      <th scope="col">E-mail</th>
      <th scope="col">Début_d'abonnement</th>
      <th scope="col">Fin_d'abonnement</th>
      <th scope="col">Numéro</th>
      <th scope="col">Genre</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($abonnes  as  $abonne )
    <tr>
     <th scope="row">{{ $abonne->id }}</th>
     <td>{{ $abonne->nom }}</td>
     <td>{{ $abonne->prenom }}</td>
     <td>{{ $abonne->naissance }}</td>
     <td>{{ $abonne->email }}</td>
     <td>{{ $abonne->created_at }}</td>
     <td>{{ $abonne->fin_abonnement }}</td>
     <td>{{ $abonne->numero }}</td>
      <td>{{ $abonne->genre }}</td>
      <td>
         <a href="{{route('abonne.edit', $abonne)}}" class="btn btn-info">Modifier</a>
         <form action="{{route('abonne.destroy',$abonne)}}" method='post' onsubmit="return cnf()">
@csrf
@method("DELETE")
           <input type="submit" class="btn btn-danger" value="Supprimer">

         </form>
      
              
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection
<script>
  function cnf(){
    let reset = confirm('Voulez-vous supprimer cet abonné?')
    if (reset){
      return true
    }
    return false
  }
</script>