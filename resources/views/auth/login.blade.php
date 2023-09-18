<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Se Connecter</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/signin.css" rel="stylesheet" />
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form  method="POST" action="{{ route('login') }}">
    @csrf
    <img class="mb-4" src="{{ asset('assets/img/Logo1.png') }}" alt="" width="150" height="150">
    <h1 class="h3 mb-3 fw-normal">CONNECTEZ-VOUS</h1>

    <div class="form-floating">
      <input id="email" type="email" placeholder="E-mail"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <br>
    <div class="form-floating">
      <input id="password" type="password" placeholder="Mot de passe"   class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

         @error('password')
             <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
         @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>

      <div class="d-flex justify-content-center">
                                  <a class="btn btn-link" href="https://regideso-rdc.com/">
                                      {{ __('Mot de passe oublié?') }}
                                  </a>

      </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
    <p class="mt-5 mb-3 text-muted">  <a href="https://regideso-rdc.com/">Suivez-nous</a>&copy; 2023</p>  
  </form>
</main>


    
  </body>
</html>
