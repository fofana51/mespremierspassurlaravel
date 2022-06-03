@extends("base")
@section("contenu")
<div class="col-md-6 offset-md-3 text-light text-center">
    <h2>
        Enregistrement d'abonné
    </h2>
</div>
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
        <form action="{{route('abonne.store')}}" method="post" class="row my-5 d-flex row-direction-column">
        <div class="container_fluid">
            <center>
            <div class="row my-5 d-flex row-direction-column justify-content-center">
                    <div class="row-col-md-4">
                    <i class="fa-solid fa-user"></i>
                        <input type="text" name="nom" id="" placeholder="Nom" pattern="[a-zA-Z]{1,}" required="">
                    </div>
                            <div class="row-col-md-4">
                            <i class="fa-solid fa-circle-user"></i>
                                <input type="text" name="prenom" id="" placeholder="Prénom" pattern="[a-zA-Z]{1,}" required="">
                            </div>
                            <div class="row-col-md-4">
                            <i class="fa-solid fa-cake-candles"></i>
                                <input type="datetime" name="naissance" id="" placeholder="Date de naissance"  required="">
                            </div>
                            <div class="row-col-md-4">
                            <i class="fa-solid fa-at"></i>
                                <input type="email" name="email" id="" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                required="">
                            </div> 
                    <div class="row-col-md-4">
                    <i class="fa-solid fa-hourglass-start"></i>
                        <input type="datetime" name="debut_abonnement" id="" placeholder="Début d'abonnement"  required="">
                    </div>
                    <div class="row-col-md-4">
                    <i class="fa-solid fa-hourglass-end"></i>
                        <input type="datetime" name="fin" id="" placeholder="Fin d'abonnement">
                    </div>
                    <br>
                    <div class="row-col-md-4">
                    <i class="fa-solid fa-phone"></i>
                        <input type="text" name="numero" id="" placeholder="Numéro"  pattern="[0-9]{1,}" required="">
                    </div>
                    <br>
                   
                    <div class="row-col-md-4">
                        <i class="fa-solid fa-mars-and-venus"></i>
                         <input type="radio" name="radio" value="M" id=""  required="">male <input type="radio" name="radio" id=""  value="F" required="">Female
                    </div>
                    <div class="col-md-3">  
                             <i class="fa-solid fa-user-plus"></i>
                                 <input type="submit" value="Enregistré" style="color: brown;"></h2>
                    </div>
                </div>
                </center>
                </div>
            </form>
        
  <p class="mb-0 text-center font-weight-bold"><a href="{{route('list')}}" class="list-unstyled text-light"> LISTES</a></p>
        <br><br>
        
         

         @if(isset($_POST['submit'])){
            @if(!empty($_POST['radio'])) {
        {{ '  ' . $_POST['radio']  }};
        @endif
        else {
         {{'SVP veuillez spécifier votre genre.'}};
    }
    } 

         @endif

 @endsection
