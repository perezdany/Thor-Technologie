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
		  <h4 class="card-title">Modifier le mot de passe</h4>

		
		  <form class="forms-sample" action="edit_email" method="post">
				  @csrf
				  <div class="form-group" style="display:none;">
				 
				  <input type="password" class="form-control" value="{{$user->id}}" name="id">
					</div>
					<div class="form-group" >
					 
					  <input type="text" class="form-control" placeholder="Nouvelle adresse email" name="email" onkeyup="this.value=this.value.toLowerCase()">
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
		  </form>
		</div>
	  </div>
  </div>
    <!-- End: MAIN CONTENT -->
@endsection
		 
