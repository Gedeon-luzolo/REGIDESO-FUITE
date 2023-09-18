
@extends('Nav.Nav')

@section('title')
    Envoie index
@endsection

@section('content')


  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src={{ asset('assets/img/bg5.jpg') }} class="d-block mx-lg-auto img-fluid"
         alt="img index" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Envoyez nous votre  <strong>index </strong></h1>
        <p class="lead"> Waouh, il est maintenant possible de nous faire une capture de l'index de votre 
          compteur et de nous l'envoyer pour obtenir votre facturation du mois, <b> c'est rapide et sûr. </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
         <a href="{{ route('Robinet') }}"class="btn btn-primary btn-lg btn-block" style="width: 50%;">Envoyer</a>
        </div>
      </div>
    </div>
  </div>
@endsection