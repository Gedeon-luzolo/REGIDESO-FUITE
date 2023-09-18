
@extends('Nav.Nav')

@section('title')
     Accuiel
@endsection

@section('content')




       <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src={{ asset('assets/img/bg2.jpg') }} class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Faites-nous un <strong>rapport </strong></h1>
        <p class="lead"> Avez-vous vu une panne d'eau, une fuite d'eau ou meme des gens qui volent de l'eau? </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
         <a href="{{ route('Envoie') }}"class="btn btn-primary btn-lg btn-block" style="width: 50%;">Envoyer</a>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>


  </div>

@endsection