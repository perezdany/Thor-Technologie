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

		
		  <form class="forms-sample" action="edit_password" method="post">
				  @csrf
				 <div class="form-group" style="display:none;">
				 
				  <input type="password" class="form-control" value="{{$user->id}}" name="id">
				</div>
				<div class="form-group" >
				 
				  <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="password"  id="pwd1">
				</div>
				<div class="form-group">
				  
				  <input type="text" class="form-control" placeholder="Confirmer le mot de passe" name="password_confirmation" required id="pwd2" onkeyup="verifyPassword()">
				</div>
				<div id="match" style=""></div>
				<script type="text/javascript">
								
								/*UN SCRIPT QUI VA VERFIER SI LES DEUX PASSWORDS MATCHENT*/
								function verifyPassword()
								{
									var msg; 
									var str = document.getElementById("pwd1").value; 
									/*if (str.match( /[0-9]/g) && 
											str.match( /[A-Z]/g) && 
											str.match(/[a-z]/g) && 
											str.match( /[^a-zA-Z\d]/g) &&
											str.length >= 10) 
										msg = "<p style='color:green'>Mot de passe fort.</p>"; 
									else 
										msg = "<p style='color:red'>Mot de passe faible.</p>"; 
									document.getElementById("msg").innerHTML= msg; */
									//var _ = require('underscore');
									var text1 = document.getElementById('pwd1').value;
									var text2 = document.getElementById('pwd2').value;
									
									if((text1 == text2))
									{
										var theText = "<p style='color:green'>Correspond.</p>"; ;
										document.getElementById("match").innerHTML= theText; 
									}
									else
									{
										var theText = "<p style='color:red'>Ne correspond pas.</p>";
										document.getElementById("match").innerHTML= theText; 
									}
								}
								
							</script>
			
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


<!-- plugin js for this page -->
  <script src="customer/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="customer/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="customer/js/file-upload.js"></script>
  <script src="customer/js/typeahead.js"></script>
  <script src="customer/js/select2.js"></script>
  <!-- End custom js for this page-->
@endsection
		 
