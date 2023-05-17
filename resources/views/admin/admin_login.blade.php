@extends('../layouts/admin_forms')
@section('title', 'Connexion')
@section('content')

<form action="/admin_login" method="post">
  @csrf
  <div class="form-group has-feedback">
    <input type="text" class="form-control" placeholder="login(pseudo)" name="login" required>
    <span class="fa fa-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="password" class="form-control" placeholder="mot de passe" name="password" required id="pwd">
    <span class="fa fa-eye form-control-feedback" id="icnopen" style="" onclick="showPassword()"></span>
    <span class="fa fa-eye-slash form-control-feedback" id="icnclose" style="margin-left: -20px; display:none;" onclick="hidePassword()"></span>
  </div>
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
      iconcl.setAttribute('style', 'position:inherit');
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
      icon.setAttribute('style', 'position:inherit');
      
      theInput.setAttribute('type', 'password');
    }
  </script>
	<div class="row">
		@if(session('success'))
			<font color="blue" class="form-control-feedback">{{session('success')}}</font>
		@endif 
		@if(session('error')) 
			<font color="red" class="form-control-feedback">{{session('error')}}</font>
		@endif
	</div>
  <div class="row">
            <!-- /.col -->
    <div class="col-6">
      <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
    </div>
    <!-- /.col -->
  </div>
</form>
@endsection
