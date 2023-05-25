@extends('layouts/base')

@section('title', config('app.name').' | Connexion')

	@section('content')
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Espace client</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"> Connexion</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="login_client">
					        @csrf
                  <font style="font-size: 20px; display: inline-block;" ><span class="icon-user"></span></font>
                  <input type="text" name="login" placeholder="Email ou numéro de téléphone" onkeyup="this.value=this.value.toLowerCase()" required><br>
                  <font style="font-size: 20px;  display: inline-block;" onclick="showPassword()" id="icnopen"><span class="icon-eye-open" ></span>
                  </font> 
                  <font style="font-size: 20px; display: none;" onclick="hidePassword()"  id="icnclose"><span class="icon-eye-close"></span></font>
                  <input type="password" name="password" placeholder="Mot de passe" required id="pwd">
                 
                  <div>
                    <input type="submit" value="Se connecter" class="btn btn-primary btn-large">
                  </div>
                </form>
                <script type="text/javascript">
                  //ecrire un script pour afficer le mot de passe
                  function showPassword(){
                    //on recupere l'icone
                    const icon = document.getElementById('icnopen');
                    const iconcl = document.getElementById('icnclose');
                    //on reupere l'input
                    var theInput = document.getElementById('pwd');
                    //on va changer leur style
                    icon.setAttribute('style', 'display:none');
                    iconcl.setAttribute('style', 'display:inline-block; font-size: 20px;');
                    theInput.setAttribute('type', 'text');
                  }

                  function hidePassword(){
                     //on recupere l'icone
                    const icon = document.getElementById('icnopen');
                    const iconcl = document.getElementById('icnclose');
                    //on reupere l'input
                    var theInput = document.getElementById('pwd');
                    //on va changer leur style
                    iconcl.setAttribute('style', 'display:none');
                    icon.setAttribute('style', 'display:inline-block; font-size: 20px;');
                    
                    theInput.setAttribute('type', 'password');
                  }
                </script>
				    <div class="center-align">
					  @if(session('success'))
					  
						<font color="blue">{{session('success')}}</font>
					  
					  @endif

					  @if(session('error'))
					  
						<font color="red">{{session('error')}}</font>
					  
					  @endif
			      </div>
              <div>
                <h4> <a href="/reset_password" ><i class="icon-question-sign"></i>Mot de passe oublié?</a></h4>
              </div>

				      <div>
                <h4><i class="icon-question-sign"></i> Vous n'avez pas de compte?</h4>
                <a href="/add_customer" class="btn btn-large bottom-space">Créer un compte</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
    <!-- End: MAIN CONTENT -->
	@endsection
  