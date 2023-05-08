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
  @php
  	use App\Models\Requesting;
  	if(isset($_GET['id']))
  	{
  		$req = Requesting::where('id_requesting', $_GET['id'])->first();
  	}
  @endphp
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Ajout d'un utlisateur</p>

      <form action="/add_request" method="post">
         @csrf

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nom" name="firstname" required 
          value="{{$req->device}}"
          >
          
        </div>
		    <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Prénom(s)" name="lastname">
          
        </div>
		<div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nom de l'appareil" name="device" required>
          
        </div>
        <div class="form-group has-feedback">
        	<label>Motif de la requête</label>
          <textarea class="form-control" name="object"></textarea>
          
        </div>
       
		 <span class="fa fa-info form-control-feedback" id="match">
         @if(session('success'))
          <font color="blue">{{session('success')}}</font>
         @endif 
         @if(session('error')) 
          <font color="red">{{session('error')}}</font>
           @endif
      </span>
		 
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
