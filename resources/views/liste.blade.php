@extends("base")
@section("contenu")

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <center><h3 class="border-bottom pb-2 mb-4">LISTE des Abonnés</h3></center>
    <div mt-4>
        <div class="d-flex  justify-content-end mb-4">
        <a href="{{  route('enregistrement')}}" class="btn btn-primary">Ajouter un nouveau abonné</a>
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
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
<a href="#" class="btn btn-info">Modifier</a>
<a href="#" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
  </tbody>
</table>
</div>


@endsection