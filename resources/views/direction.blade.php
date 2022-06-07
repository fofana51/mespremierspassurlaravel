@extends("base")
@section("contenu")
<div class="col-md-6 offset-md-3 text-light text-center">
    <h2>
        Modification d'abonné
    </h2>
</div>
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
        <form action="{{route('abonne.update',$abonnes)}}" method="post" class="row my-5 d-flex row-direction-column">
       @csrf
       @method("PUT")
        <div class="container_fluid">
            <center>
            <div class="row my-5 d-flex row-direction-column justify-content-center">
                    <div class="row-col-md-4">
                    <i class="fa-solid fa-user"></i>
                        <input
                         type="text"
                          name="nom"
                         id="" 
                         placeholder="Nom" 
                         pattern="[a-zA-Z]{1,}" required
                         value="{{$abonnes->nom}}">
                    </div>
                            <div class="row-col-md-4">
                            <i class="fa-solid fa-circle-user"></i>
                                <input
                                 type="text" name="prenom" id="" placeholder="Prénom" pattern="[a-zA-Z]{1,}" required
                                 value="{{$abonnes->prenom}}">
                            </div>
                            <div class="row-col-md-4">
                            <i class="fa-solid fa-cake-candles"></i>
                                <input type="text" onfocus="this.type='date'" 
                                name="naissance" id="" placeholder="Date de naissance"  required
                                value="{{$abonnes->naissance}}">
                            </div>
                            <div class="row-col-md-4">
                            <i class="fa-solid fa-at"></i>
                                <input type="email" name="email" id="" placeholder="E-mail"
                                required
                                value="{{$abonnes->email}}">
                            </div> 
                    
                    <div class="row-col-md-4">
                    <i class="fa-solid fa-hourglass-end"></i>
                        <input type="text" onfocus="this.type='date'" name="fin_abonnement" id="" 
                        placeholder="Fin d'abonnement"
                        required
                        value="{{$abonnes->fin_abonnement}}">
                    </div>
                    <br>
                    <div class="row-col-md-4">
                    <i class="fa-solid fa-phone"></i>
                        <input type="text" name="numero" id="" placeholder="Numéro"  
                        pattern="[0-9]{1,}" required
                        value="{{$abonnes->numero}}">
                    </div>
                    <br>
                   
                    <div class="row-col-md-4">
                        <i class="fa-solid fa-mars-and-venus"></i>
                         @if($abonnes->genre=="F")
                         <input type="radio" name="genre" value="M" id=""  >male 
                         <input type="radio" name="genre" id="" checked value="F" >Female
                         @else
                         <input type="radio" name="genre" value="M" id="" checked>male 
                         <input type="radio" name="genre" id="" value="F" >Female
                         @endif
                    </div>
                    <div class="col-md-3">  
                             <i class="fa-solid fa-user-plus"></i>
                                 <input type="submit" value="Modifier" style="color: brown;"></h2>
                    </div>
                </div>
                </center>
                </div>
            </form>
        
  <p class="mb-0 text-center font-weight-bold"><a href="{{route('abonne.index')}}" class="list-unstyled text-light"> LISTES</a></p>
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
