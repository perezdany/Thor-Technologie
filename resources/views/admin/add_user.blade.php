@extends('../layouts/admin_forms')
@section('title', 'Enregistrement d\'utilisateur ')
@section('content')
<form action="/add_user" method="post">
         @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nom" name="firstname" required>
          
        </div>
		    <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Prénom(s)" name="lastname">
          
        </div>
		    <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Téléphone" name="tel" required>
          
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email">
          
        </div>
        <div class="form-group">
          <input type="text" name="address" placeholder="Adressse" class="form-control" required>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Mot de passe" name="password" id="pwd1">
          
           <span class="fa fa-info form-control-feedback" id="msg">
             
           </span>
        </div>
        <script type="text/javascript">
          
      /*UN SCRIPT QUI VA VERFIER SI LES DEUX PASSWORDS MATCHENT
      function strongPassword()
      {
        var msg; 
        var str = document.getElementById("pwd1").value; 
        if (str.match( /[0-9]/g) && 
            str.match( /[A-Z]/g) && 
            str.match(/[a-z]/g) && 
            str.match( /[^a-zA-Z\d]/g) &&
            str.length >= 8) 
          msg = "<p style='color:green'>Mot de passe fort.</p>"; 
        else 
          msg = "<p style='color:red'>Mot de passe faible.</p>"; 
        document.getElementById("msg").innerHTML= msg;
        
      }*/
        </script>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Confirmer le mot de passe" id="pwd2" onkeyup="verifyPassword();">
          
        </div>
		 <span class="fa fa-info form-control-feedback" id="match">
         @if(session('success'))
          <font color="blue">{{session('success')}}</font>
         @endif 
         @if(session('error')) 
          <font color="red">{{session('error')}}</font>
           @endif
      </span>
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
        <div class="row">
         
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block ">Enregistrer</button>
          </div>
           <div class="col-6">
            <span type="" class="btn btn-danger btn-block "><a href="/admin_dashboard"><font color="white">Retour</a></font></span>
          </div>
          <!-- /.col -->
        </div>
      </form>
@endsection