<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Espace admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/css/font-awesome4-0-0.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/css/ionicons2-0-1.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/css/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="login-logo">
    Thor Technologie logo
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Ajout d'un utlisateur</p>

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

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="admin/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="admin/css/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
