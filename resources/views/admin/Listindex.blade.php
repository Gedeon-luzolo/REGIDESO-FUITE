@extends('layouts.Master')

@section('title')
     Accueil Panneau
@endsection

@section('Namepage')
     Liste des index
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="title">Rapport mensuel des index </h2>
            <p class="category">Ici s'affiche toutes les requetes soumises par les abonnés</p>

       <div class="table-responsive">
     <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>N° d'abonné</th>
        <th>Noms</th>
        <th>Valeur d'index</th>
        <th>Adresse</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
           @foreach($decryptedData as $item)  
  <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="{{asset('Images/'. $item['Photo'])}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>
   
      <tr>
         <td>{{ $item['id'] }}</td>
         <td>{{ $item['NumAbonne'] }}</td>
         <td>{{ $item['Noms'] }}</td>
         <td>{{ $item['Numindex'] }}</td>
         <td>{{ $item['Adresse'] }}</td>

         <td>
               <img src="{{asset('Images/'. $item['Photo'])}}" Width='30' heigth='30' class='img ig responsive' class="img-thumbnail" data-toggle="modal" data-target="#imageModal"> 
        </td>
      </tr>
         @endforeach
    </tbody>
  </table>
</div>

@endsection

@section('scripts')

@endsection