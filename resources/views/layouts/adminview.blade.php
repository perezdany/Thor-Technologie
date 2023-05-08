<!DOCTYPE html>
<html>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="admin/datatables/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="welcome" class="nav-link">Vers le site</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
  

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src=""
           alt="thor techonologie Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Espace admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{session('pseudo')}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-gift"></i>
              <p>
                Produits
               
              </p>
            </a>
          </li>
			
		  <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
               Services
               
              </p>
            </a>
          </li>
     

          <li class="nav-item">
            <a href="add_user" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Inscrire un client
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="add_request" class="nav-link">
              <i class="nav-icon fa fa-question"></i>
              <p>
                Ajouter une requête
               
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="login_admin" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Déconnexion
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
   
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2023</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="admin/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="admin/datatables/jquery.dataTables.js"></script>
<script src="admin/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="admin/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
