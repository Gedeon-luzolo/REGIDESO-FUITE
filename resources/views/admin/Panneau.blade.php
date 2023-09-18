@extends('layouts.Master')

@section('title')
     Panneau
@endsection

@section('Namepage')
     Rapport des fuites
@endsection

@section('content')

  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="title">Liste de requetes pour les fuites </h2> 
            <p class="category">Ici s'affiche toutes les requetes soumis par les individis</p>
            

              {{-- <div class="col-md-6">
              <div class="form-group">
                <div class="input"></div>
               <select class="form-select" name="data-filter">
                  <option value="">Toutes les données</option>
                </select>
                <button type="submit" class="btn btn-primary" style="background-color: rgb(0, 132, 255)">Filtrer</button>
              </div>
            </div> 
            <form> --}}
           
       <div class="table-responsive">
     <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Date</th>
        <th>Description</th>
        <th>Image</th>
      </tr>

      <thead>
 
    <tbody>
         
           @foreach ($Fuite as $row)

      
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
        <img src="{{asset('Photo/'. $row->Photo)}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

      <tr>
        <td> {{$row->id}} </td>
        <td> {{$row->Nom}} </td>
        <td> {{$row->Adresse}} </td>
        <td> {{$row->Date}} </td>
         <td> {{$row->Description}} </td>
         <td onclick="showModal('{{$row->Photo}}')">
               <img id="urlPhoto" src="{{asset('Photo/'. $row->Photo)}}" Width='50' heigth='50' class='img ig responsive' class="img-thumbnail" data-toggle="modal" data-target="#imageModal"> 
        </td>
      </tr>
         @endforeach
    </tbody>
  </table>
</div>

@endsection


@section('scripts')

@endsection