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
            <h4 class="widget-header"><i class="icon-user"></i> Connexion</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="login_client">
					@csrf
                  <input type="text" name="login" placeholder="Email ou numéro de téléphone" onkeyup="this.value=this.value.toLowerCase()" required>
                  <input type="password" name="password" placeholder="mot de passe" required>
                 
                  <div>
                    <input type="submit" value="Se connecter" class="btn btn-primary btn-large">
                  </div>
                </form>
				    <div class="center-align">
					  @if(session('success'))
					  
						<font color="blue">{{session('success')}}</font>
					  
					  @endif

					  @if(session('error'))
					  
						<font color="red">{{session('error')}}</font>
					  
					  @endif
			      </div>
				      <div>
                <h4><i class="icon-question-sign"></i> Vous n'avez pas de compte?</h4>
                <a href="/add_customer" class="btn btn-large bottom-space">S'inscrire</a>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
    <!-- End: MAIN CONTENT -->
	@endsection
  