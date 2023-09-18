
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/Logo1.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/Logo1.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" />
 <link href="{{ asset('assets') }}/css/heroes.css" rel="stylesheet" />
 <link href="{{ asset('assets') }}/js/main.css" rel="stylesheet" />
 
</head>
<body>
            {{-- Barre de nvigation --}}

<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="/Accueil">
    <img src="{{ asset('assets/img/Logo1.png') }}" alt="l" width="40" height="40">    
          Regideso 
  </a>
  @if (auth()->check())
  <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="btn btn-success">Se deconnecter</button>
  </form>
  @else
  <!-- Afficher le label "Se connecter" -->
  <h6> <a href="{{ route('login') }}" style="color:white;">Agent?</a></h6>
  @endif
</ul>    

</nav>
             {{-- Fin Barre de nvigation --}}

  @yield('content')
  <footer class="bg-primary text-white py-3">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <p class="mb-0">Copyright 2023 © 
          <a href="https://www.regideso-rdc.com/" class="text-white font-weight-bold">Regideso</a>. 
          Tous droits réservés.</p>
      </div>
      <div class="col-12 col-md-6 text-md-right">
        <a href="https://www.facebook.com/profile.php?id=100066730580586&_rdc=1&_rdr">
          <i class="fab fa-facebook fa-lg text-white mr-3"></i>
        </a>
        <a href="https://www.regideso-rdc.com/">
          <i class="fas fa-globe  fa-lg text-white mr-3"></i>
        </a>

         <a href="https://www.youtube.com/channel/UCzA6kJ-jYZWMSiNatf-N1aw">
          <i class="fab fa-youtube fa-lg text-white"></i>
        </a>
      </div>
    </div>
  </div>
</footer>
  <script src="{{ asset('assets') }} /js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }} /js/bootstrap.bundle.min.js"></script>
</body>
