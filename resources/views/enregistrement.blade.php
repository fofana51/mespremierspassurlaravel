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
       @csrf
        <div class="container_fluid">
            <center>
            <div class="row my-5 d-flex row-direction-column justify-content-center">
                    <div class="row-col-md-6">
                    <i class="fa-solid fa-user"></i>
                        <input type="text" name="nom" id="" placeholder="Nom"  style="min-width:300px; min-height:40px" pattern="[a-zA-Z]{1,}" required="">
                    </div>
                            <div class="row-col-md-6">
                            <i class="fa-solid fa-circle-user"></i>
                                <input type="text" name="prenom" id="" placeholder="Prénom"  style="min-width:300px; min-height:40px" pattern="[a-zA-Z]{1,}" required="">
                            </div>
                            <div class="row-col-md-6">
                            <i class="fa-solid fa-cake-candles"></i>
                                <input type="text" onfocus="this.type='date'"  style="min-width:300px; min-height:40px" name="naissance" id="" placeholder="Date de naissance"  required="">
                            </div>
                            <div class="row-col-md-6">
                            <i class="fa-solid fa-at"></i>
                                <input type="email" name="email" id="" placeholder="E-mail"  style="min-width:300px; min-height:40px"
                                required="">
                            </div> 
                    
                    <div class="row-col-md-6">
                    <i class="fa-solid fa-hourglass-end"></i>
                        <input type="text" onfocus="this.type='date'"  style="min-width:300px; min-height:40px" name="fin_abonnement" id="" placeholder="Fin d'abonnement">
                    </div>
                    <br>
                    <div class="row-col-md-6">
                    <i class="fa-solid fa-phone"></i>
                        <input type="text" name="numero" id="" placeholder="Numéro"  pattern="[0-9]{1,}" 
                        style="min-width:300px; min-height:40px"
                        required>
                    </div>
                    <br>
                   
                    <div class="row-col-md-6">
                        <i class="fa-solid fa-mars-and-venus"></i>
                         <input type="radio" name="genre" value="M" id=""  style="min-width:20px; min-height: 20px;" required><span style="color: white;"> male </span>
                         <input type="radio" name="genre" id=""  value="F" style="min-width:20px; min-height: 20px;" ><span style="color: white;"> Female</span>
                    </div>
                    <div class="col-md-4">  
                             <i class="fa-solid fa-user-plus"></i>
                                 <input type="submit" value="Enregistré" style="color: brown; min-width:170px"></h2>
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
