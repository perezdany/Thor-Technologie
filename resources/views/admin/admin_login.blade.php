<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Espace admin-conexion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/css/font-awesome4-0-0.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/css/ionicons2-0-1.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/css/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    Thor Technologie logo
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connexion</p>

      <form action="/admin_login" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="login(pseudo)" name="login" required>
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="mot de passe" name="password" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
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



      <p class="mb-1">
        <!--<a href="#">I forgot my password</a>-->
      </p>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!--<script src="../../plugins/jquery/jquery.min.js"></script>-->
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
