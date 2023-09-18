@extends('layouts.Master')

@section('title')
     Modifier
@endsection

@section('Namepage')
     Modifier un abonné
@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">

	<div class="container">
		<h2>Modifier les abonnés</h2>

        <form method="POST" action="/UtilisateurUpdate/{{$User->id}}">
          {{ csrf_field() }}

            {{method_field('PUT') }}

            @csrf
                 
             {{--  Nom d'utilisateur  --}}
             <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="name" type="text" placeholder="Nom d'utilisateur" value="{{$User->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
            </div>

            {{--  E-mail  --}}
             <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input name="email" type="email" placeholder="Adresse mail" value="{{$User->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>



                    {{--  Mot de passe  --}}
            <div class="input-group form-group">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password" type="password" placeholder="Mot de passe" value="{{($User->password) }}" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              </div>

                     <select class="custom-select" name="usertape1">
                    <option selected>Type d'utilisateur...</option>
                    <option value="Admin">Admin</option>
                    <option value="User">Utilisateur</option>
                    </select>
                    <button class="w-30 btn btn-lg "  style="background-color: rgb(0, 119, 255)" type="submit">Modifier</button>
                    <BR>
                    <a href="/Utilisateur" class="btn btn-primary">Retour</a>
        </div>
     </form> 
    </div>
</div>
</div>
	</div>

@endsection


@section('scripts')

@endsection