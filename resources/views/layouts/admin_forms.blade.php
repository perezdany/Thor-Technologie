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
   <img src="img/thor_logo.png" class="profile-user-img img-fluid img-circle">
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">@yield('title','Ajout d\'un utlisateur')</p>
		@yield('content')
      

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
