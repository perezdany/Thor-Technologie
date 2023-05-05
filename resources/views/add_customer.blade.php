<?php
session_start();
?>
@extends( 'layouts/base' )

@section('title', config('app.name').' | Inscription')

@section( 'content' )

<div class="content">
	<div class="container">
		<div class="page-header">
			<h1>Inscription</h1>
		</div>
		<div class="row">
			<div class="span6 offset3">
				<h4 class="widget-header"><i class="icon-gift"></i> Soyez un membre de la famille</h4>
				<div class="widget-body">
					<div class="center-align">
						<form class="form-horizontal form-signin-signup" method="post" action="" id="f">
							@csrf
							<input type="text" name="firstname" placeholder="Nom" required>
							<input type="text" name="lastname" placeholder="Prénom(s)" required>
							<input type="text" name="tel" placeholder="Téléphone" required>
							<input type="text" name="email" placeholder="Email" onkeyup="this.value=this.value.toLowerCase()" required>
							<input type="password" name="password" placeholder="Mot de passe" id="pwd1" required>
							<input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe" id="pwd2" onkeyup="verifyPassword()" required>
							<div id="msg" style=""></div>
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
							<div>
								<input type="submit" value="Valider" class="btn btn-primary btn-large">
							</div>
						</form>
						<div class="center-align">
							@if(session('success'))
							<font color="blue">{{session('success')}}</font>
							 @endif @if(session('error')) 
							<font color="red">{{session('error')}}</font>
							 @endif
						</div>

						<h4><i class="icon-question-sign"></i> Vous avez déja un compte?</h4>
						<a href="login_client" class="btn btn-large bottom-space">Se connecter</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End: MAIN CONTENT -->
@endsection