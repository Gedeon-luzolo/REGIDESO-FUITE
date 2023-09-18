@extends('layouts.Master')

@section('title')
     Les utilisateurs
@endsection

@section('Namepage')
	Les utilisateurs
@endsection

@section('content')
                         <!-- sample modal content -->
                        <div class="modal fade" id="noticemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Ajouter un Nouveau Utilisateur</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
									<form method="POST" action="/Ajouter">
										@csrf
                                    <div class="modal-body">
                                             
                                         {{--  Nom d'utilisateur  --}}
                                         <div class="input-group form-group">
						                <div class="input-group-prepend">
						            	<span class="input-group-text"><i class="fas fa-user"></i></span>
						                </div>
										<input type="text" placeholder="Nom d'utilisateur" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

										        @error('name')
                                               <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
					                    </div>

                                        {{--  Nom d'utilisateur  --}}

										 {{-- Adresse mail --}}
                                         <div class="input-group form-group">
						                <div class="input-group-prepend">
						            	<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						                </div>
										<input type="email" placeholder="Adresse mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
					                    </div>

                                              
                                          {{--  Mot de passe  --}}
                                         <div class="input-group form-group">
						                  <div class="input-group-prepend">
						                	<span class="input-group-text"><i class="fas fa-key"></i></span>
						                  </div>
										  <input  type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

										  @error('password')
											  <span class="invalid-feedback" role="alert">
												  <strong>{{ $message }}</strong>
											  </span>
										  @enderror
                                                     
										  <br>

										    {{--  Num d'abonné --}}
											<div class="input-group form-group">
												<div class="input-group-prepend">
												  <span class="input-group-text"><i class="fas fa-cloud"></i></span>
												</div>
												<input type="text" placeholder="Numero d'abonné" class="form-control @error('num') is-invalid @enderror" name="num" required autocomplete="new-password">
	  
												@error('num')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
												</div>
				                    	  </div>
                                                 <select class="custom-select" id="usertype" name="usertype">
				                                <option selected>Type d'utilisateur...</option>
				                                <option value="Admin">Admin</option>
				                                <option value="Abonne">Abonné</option>
			                                    </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal --> 



  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">

          <div class="card-header">
       @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">      
             <strong>{{ $message }} </strong>
           </div>
        @endif

         <div class="table-responsive">

	<div class="container">
		<h2>Administrer les Utilisateurs</h2>
		<table class="table table-hover">
			<thead>
				<tr>
				<th>N°</th>
				<th>Nom complet</th>
				<th>Email</th>
				<th>Type d'utlisateur</th>
				<th>
				  <button type="button" class="btn btn-primary" ><i class="fa fa-plus"></i><a data-toggle="modal" data-target="#noticemodel" data-whatever="@getbootstrap" class="text-white "><i class="" aria-hidden="true"></i> Ajouter un utilisateur </a></button>
				</tr>
			</thead>
			<tbody>
			   @foreach ($User as $row )
				<tr>
				     <td> {{$row->id}} </td>
                     <td> {{$row->name}} </td>
                     <td> {{$row->email}} </td>
                     <td> {{$row->usertype}} </td>

					<td><a href="/Utilisateur-edit/{{$row->id}}" class="btn btn-primary">Editer</a></td>
				     <td>
						<form action="/delete-utlisateur/{{$row->id}}" method="post">
						{{ csrf_field() }}
						{{method_field('DELETE') }}
						<Button type="submit" class="btn btn-primary" style="background-color: rgb(0, 132, 255)">Supprimer </BUtton>
						 </form>
				    </td>
				</tr>
                @endforeach
			</tbody>
		</table>
	</div>

@endsection


@section('scripts')

@endsection