
@extends('Nav.Nav')

@section('content')

  <div class="b-example-divider"></div>
  
       @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">      
             <strong>{{ $message }} </strong>
           </div>
        @endif
        
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
      
       
        <h1 class="display-4 fw-bold lh-1 mb-3">Envoyez-nous votre numero <strong> d'index  </strong> </h1>
        <p class="col-lg-10 fs-4">Desormais,C'est possible de nous envoyez votre index du compteur pour une facturation mensuelle .</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">

      
        <form method="POST" action="/post1" class="p-4 p-md-5 border rounded-2 bg-light" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="NumAbonne" placeholder="Numéro d'abonné" value="{{ old('NumAbonne')}}"/>
            @if ($errors->has('NumAbonne'))
            <span class ="text-danger">{{ $errors->first('NumAbonne')}}</span>
            @endif
          </div>
         
         <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Noms" placeholder="Nom complet de l'abonné"value="{{ old('Noms')}}"/>
            @if ($errors->has('Noms'))
            <span class ="text-danger">{{ $errors->first('Noms')}}</span>
            @endif
          </div>
            
         <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Numindex" placeholder="Valeur du numéro d'index" value="{{ old('Numindex')}}"/>
             @if ($errors->has('Numindex'))
            <span class ="text-danger">{{ $errors->first('Numindex')}}</span>
            @endif
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="Adresse" placeholder="Adresse" value="{{ old('Adresse')}}"/>
             @if ($errors->has('Adresse'))
            <span class ="text-danger">{{ $errors->first('Adresse')}}</span>
            @endif
          </div>

                <!-- Modal camera -->

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Prendre une photo
        </button>
       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                 <div class="modal-content">
                <div class="modal-header">
              <h5 class="modal-title">Prendre une photo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <video id="video" width="100%" height="auto"></video>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <button type="button" class="btn btn-primary" onclick="takePicture()">Prendre la photo</button>
          </div>
      </div>
  </div>
</div>
              {{-- end modal --}}


        <div class="mb-3">
           
        <input class="form-control" type="file" name="Photo" value="{{ old('Photo')}}"/>
          @if ($errors->has('Photo'))
            <span class ="text-danger">{{ $errors->first('Photo')}}</span>
            @endif
         </div>
          <button class="w-100 btn btn-btn btn-primary" type="submit">Envoyer</button>
          <hr class="my-4">
          <small class="text-muted">Cliquer sur le boutton pour envoyer.</small>
        </form>
      </div>
    </div>
  </div>
  <script src="../assets/js/camera.js"></script>
@endsection