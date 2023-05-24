<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Espace Client</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="customer/vendors/feather/feather.css">
  <link rel="stylesheet" href="customer/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="customer/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="customer/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="customer/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="customer/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!--<link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">-->
  <link rel="stylesheet" href="customer/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="customer/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="icon" href="img/thor_logo.png" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="#">
            <img src="img/thor_tech_sans_fond.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="#">
            <img src="img/thor_logo.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Bonjour, <span class="text-black fw-bold">@yield('username', 'John Doe')</span></h1>
            <h3 class="welcome-sub-text">Bienvenue à votre espace client</h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-48px mdi-account-circle img-xs"></i>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <i class="mdi mdi-24px mdi-account-circle img-xs"></i>
                <p class="mb-1 mt-3 font-weight-semibold">@yield('profile', 'Allen Moreno')</p>
                <p class="fw-light text-muted mb-0">@yield('email', 'allenmoreno@gmail.com')</p>
              </div>
              <a class="dropdown-item" href="my_profile"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mon Profile </a>
             
              <a class="dropdown-item" href="/logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Déconnexion</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="espace_client">
              <i class="mdi mdi-account-circle-outline menu-icon"></i>
              <span class="menu-title">Espace client</span>
            </a>
          </li>
		  <li class="nav-item nav-category">Le site</li>
  
          <li class="nav-item">
            <a class="nav-link" href="/welcome" aria-expanded="false" aria-controls="auth">
              
			  <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Page d'accueil</span>
           
            </a>
			</li>
			<li class="nav-item"> 
				<a class="nav-link"   href="/services" aria-expanded="false" aria-controls="auth">
				 <i class="mdi mdi-shopping-search menu-icon"></i>
				  <span class="menu-title">Produits et services</span>

				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"   href="/logout" aria-expanded="false" aria-controls="auth">
				 <i class="mdi mdi-account-circle menu-icon"></i>
				  <span class="menu-title">Déconnexion</span>

				</a>
          	</li>
        
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
				        @yield('content')
				 
              </div>
            </div>
          </div>
		  
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">THOR TECHNOLOGIE SARL</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Tous droits réservés.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="customer/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!--<script src="customer/vendors/chart.js/Chart.min.js"></script>-->
  <script src="customer/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="customer/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="customer/js/off-canvas.js"></script>
  <script src="customer/js/hoverable-collapse.js"></script>
  <script src="customer/js/template.js"></script>
  <script src="customer/js/settings.js"></script>
  <!--<script src="customer/js/todolist.js"></script>-->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="customer/js/dashboard.js"></script>
  <!--<script src="customer/js/Chart.roundedBarCharts.js"></script>-->
  <!-- End custom js for this page-->
</body>

</html>

