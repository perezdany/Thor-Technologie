@extends('layouts/base' )

@section('title', config('app.name').' | Inscription')

@section( 'content' )

<div class="content">
	<div class="container">
		<div class="page-header">
			<h1>Inscription</h1>
		</div>
		<div class="row">
			<div class="span6 offset3">
				<h4 class="widget-header"><i class="icon-gift"></i> Réinitilisation de mot de passe</h4>
				<div class="widget-body">
					<div class="center-align">
						<form class="form-horizontal form-signin-signup" method="post" action="resetpass_form" id="f">
							@csrf
							
							<input type="password" name="password" placeholder="Mot de passe" id="pwd1" required>
							<font style="font-size: 20px; position: absolute; margin-left: -20px;" onclick="showPassword()" id="icnopen"><span class="icon-eye-open" ></span>
                  			</font> 
                  			<font style="font-size: 20px; display:none;" onclick="hidePassword()"  id="icnclose"><span class="icon-eye-close"></span>
                  			</font>
							<input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe" id="pwd2" onkeyup="verifyPassword()" required>
							
							<script type="text/javascript">
			                  //ecrire un script pour afficer le mot de passe
			                  function showPassword(){
			                    //on recupere l'icone
			                    const icon = document.getElementById('icnopen');
			                    const iconcl = document.getElementById('icnclose');
			                   
			                    //on reupere l'input
			                    var theInput1 = document.getElementById('pwd1');
			                    var theInput2 = document.getElementById('pwd2');
			                    //on va changer leur style
			                    icon.setAttribute('style', 'display:none');
			                    iconcl.setAttribute('style','margin-left: -20px; font-size: 20px; position:absolute;');
			                  
			                    theInput1.setAttribute('type', 'text');
			                    theInput2.setAttribute('type', 'text');
			                  }

			                  function hidePassword(){
			                     //on recupere l'icone
			                    const icon = document.getElementById('icnopen');
			                    const iconcl = document.getElementById('icnclose');
			                    
			                    //on reupere l'input
			                    var theInput1 = document.getElementById('pwd1');
			                    var theInput2 = document.getElementById('pwd2');
			                    //on va changer leur style
			                    iconcl.setAttribute('style', 'display:none');
			                    icon.setAttribute('style', 'margin-left: -20px; font-size: 20px; position:absolute;');
			                    
			                    
			                    theInput1.setAttribute('type', 'password');
			                    theInput2.setAttribute('type', 'password');
			                  }
                			</script>
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
								<input type="submit" value="Modifier" class="btn btn-primary btn-large">
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