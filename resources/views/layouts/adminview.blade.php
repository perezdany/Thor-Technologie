<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your name">

    <title>@yield('title', config('app.name'))</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
	
   <style type="text/css">
      .invisible{
        display: none;
      }
    </style>

  </head>
<body > 
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class=" navbar-inner">
          <div class="container">
            <a href="welcome" class="brand brand-bootbus"><img src="img/logothor_tech-logo.jpg" class="img-circle" width="80px" height="80px" alt="">THOR TECHNOLOGIE</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Poduits et services<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUITS</li>
                    <li><a href="">Produit1</a></li>
                    <li><a href="">Produit2</a></li>
                    <li><a href="">Produit3</a></li>
                    <li><a href="">Tous les produits</a></li>             
                    <li class="divider"></li>
                    <li class="nav-header">SERVICES</li>
                    <li><a href="">Service1</a></li>
                    <li><a href="">Service2</a></li>
                    <li><a href="">Service3</a></li>
                    <li><a href="">Tous les services</a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">A propos de nous<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">L'équipe</a></li>
                    <li><a href="#">Partenaires</a></li>
                  </ul>
				        </li>
				        <li><a href="/admin_login"> @yield('onglet')</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    @yield('content')
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      
      <div class="container">
        <p>
          &copy; 2023, Tout Droits réservés.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
   <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
    <!--<script type="module" src="js/trace.js"></script>-->
	
	
	
	<!-- pour les tableaux-->
	
	 
  <script src="datatables/dataTables.bootstrap4.min.js"></script>
	
	<!--<script src="js/datatables-demo.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>-->
	
  </body>
</html>

