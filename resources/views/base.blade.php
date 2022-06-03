<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- Bootstrap CSS -->
   <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('/css/style.css')}}" rel="stylesheet">
       
       <!-- Bootstrap Bundle with Popper -->
       <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <title>Laravel</title>
<body>
<div class="container-fluid">
        <div class="header d-flex justify-content-between align-items-center text-danger" class="col-xs">
            <img src="{{asset('/images/logo/index.png')}}" alt="" class="col-md-2">
            <p class="col-xs">
             <h1>Bienvenue chers Administrateurs</h1>
            </p>
            <img src="{{asset('/images/logo/auf.png')}}" alt="" class="col-md-2 img-fluid">
        </div>
        <div class="container-md col-xs">
        @yield('contenu')
    </div>
    <footer>
        copyright-AUF 2022
    </footer>
    </body>
</html>
