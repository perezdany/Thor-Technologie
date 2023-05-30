@extends('../layouts/customer')
 
@section('username')
	@if(session('nom') AND session('prenom'))
		{{session('prenom')}} {{session('nom')}}
	@endif	
@endsection
@section('profile')
	@if(session('theuser'))
		{{session('prenom')}} {{session('nom')}}
	@endif	
@endsection
@php
	if(session('theuser'))
	{
		$user = session('theuser');
			
	}
		
@endphp

@section('email')
	{{$user->user_email}}
@endsection

@section('content')

    <!-- Start: MAIN CONTENT -->
  <div class="col-md-6 grid-margin stretch-card">
	  <div class="card">
		<div class="card-body">
		  <h4 class="card-title">Modifier les informations de mon compte</h4>
	
		
		 @php
                  use App\Controllers\UserController;
                  use App\Models\Customer;
                  if(session('theuser')->id)
                  {
                    $req = Customer::where('id', session('theuser')->id)->first();
                  }

                @endphp
		
		  <form class="forms-sample" action="my_profile" method="post">
			  @csrf
			<div class="form-group">
			 
			  <input type="text" class="form-control"  name="firstname"  value="{{$req->firstname}}">
			</div>
			<div class="form-group">
			 
			  <input type="text" class="form-control"  name="lastname"  value="{{$req->lastname}}">
			</div>
			<div class="form-group">
			  
			  <input type="text" class="form-control" placeholder="Nom de l'appareil" name="tel"   value="{{$req->user_tel}}" required>
			</div>
		
			<div class="form-group">
			  
			  <input type="text" class="form-control" placeholder="Nom de l'appareil" name="address"   value="{{$req->address}}" required>
			</div>
			
			  <div class="form-group">
				   @if(session('success'))
                	<font color="blue">{{session('success')}}</font>
              		@endif 
              		@if(session('error')) 
                		<font color="red">{{session('error')}}</font>
              		@endif
			  </div>
			<button type="submit" class="btn btn-primary me-2">valider</button>
			<button class="btn btn-danger" type="reset">Annuler</button>
		  </form><hr>
			<div class="form-group">
				<span><a href="edit_email">Modifier mon addresse email</a></span><br>
				<span><a href="edit_password">Modifier mon mot de passe</a></span><br>
			</div>
		  
		</div>
	  </div>
  </div>
    <!-- End: MAIN CONTENT -->
@endsection
		 
		
		
		
