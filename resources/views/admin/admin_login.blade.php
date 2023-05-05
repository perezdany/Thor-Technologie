@extends('layouts/adminview')

@section('title', config('app.name').' | Connexion')

	@section('content')
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Espace Admin</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Connexion</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" method="post" action="">
					@csrf
                  <input type="text" name="login" placeholder="Pseudo" onkeyup="this.value=this.value.toLowerCase()" required>
                  <input type="text" name="password" placeholder="mot de passe" required>
                 
                  <div>
                    <input type="submit" value="Se connecter" class="btn btn-primary btn-large" >
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
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <!-- End: MAIN CONTENT -->
	@endsection
  