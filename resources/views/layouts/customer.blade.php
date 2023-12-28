<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace Client</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../public/customer/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../public/customer/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../public/customer/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../public/assets/img/thor_logo.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <!--<a class="navbar-brand brand-logo" ><img src="img/logothor_tech.jpg" alt="logo"/></a>-->
           <a class="navbar-brand brand-logo" ><img src="../../public/assets/img/thor_tech_1539x800.jpg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" ><img src="../../public/assets/img/thor_logo.png" ></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../public/assets/img/user-icon.png" alt="profile"/>
              <strong><span class="nav-profile-name">@yield('username', 'John Doe')</span></strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="my_profile">
                <i class="typcn typcn-cog-outline text-primary"></i>
                Mon Profile
              </a>
              <a class="dropdown-item" href="logout">
              	<i class="typcn typcn-eject text-primary"></i>
              	Déconnexion
              </a>
            </div>
          </li>
         
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" >
              <h6 class="date mb-0">{{date("d/m/Y")}}</h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>
          
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
	  <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Bienvenue à votre Espace  Client</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Espace Client</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">@yield('page', 'page courante')</p>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block mr-0">
			<!--
			<form class="input-group" method="post" action="">
				<input type="text" class="form-control" placeholder="Recherche" aria-label="search" aria-describedby="search" name="search">
				<div class="input-group-prepend">
					<span class="input-group-text" id="search">
						<i class="typcn typcn-zoom"></i>
					</span>
				</div>
			</form>
			-->

          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
		  <li class="nav-item">
            <a class="nav-link" href="espace_client">
              <i class="typcn typcn-user menu-icon"></i> 
              <span class="menu-title">Mon Espace</span>
              
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="welcome" target="_blank">
              <i class="typcn typcn-home menu-icon"></i> 
              <span class="menu-title">Le site</span>
              
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="services" target="_blank">
              <i class="typcn typcn-shopping-cart menu-icon"></i>
              <span class="menu-title">Services</span>
              
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="our_products" target="_blank">
              <i class="typcn typcn-shopping-bag menu-icon"></i>
              <span class="menu-title">Produits</span>
              
            </a>
           </li>
            <li class="nav-item">
            <a class="nav-link" href="my_profile">
              <i class="typcn typcn-cog menu-icon"></i>
              <span class="menu-title">Mon profile</span>
              
            </a>
           </li>
		   <li class="nav-item">
            <a class="nav-link" href="logout">
              <i class="typcn typcn-eject menu-icon"></i>
              <span class="menu-title">Déconnexion</span>
              
            </a>
           </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
           @yield('content') 
            
            
            
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">THOR TECHNOLOGIE SARL Tous droits réservés.</span>
                      
                    </div>
                </div>    
            </div>        
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../public/customer/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../public/customer/js/off-canvas.js"></script>
  <script src="../../public/customer/js/hoverable-collapse.js"></script>
  <script src="../../public/customer/js/template.js"></script>
  <script src="../../public/customer/js/settings.js"></script>
  <script src="../../public/customer/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
