<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
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
	 <!--icon-->
	 <link href="img/thor_logo.png" rel="icon">

    <style type="text/css">
      .invisible{
        display: none;
      }
    </style>
	 <!--<script>
		$(document).ready(function() {
			$('#example').DataTable( {
				fixedHeader: true
			} );
		} );
	 </script>-->

  </head>
<body > 
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class=" navbar-inner">
          <div class="container">
            <a href="welcome" class="brand brand-bootbus"><img src="img/thor_logo.jpg" class="img-circle" width="40px" height="40px" alt="">THOR TECHNOLOGIE</a>
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
                    <li><a href="/our_products">Produits</a></li>             
                    <li class="divider"></li>
                   
                    <li><a href="/services">Services</a></li>
                  </ul>                  
                </li>
                
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nous contacter<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <li><a>Fixe : 27 35 98 24 50</a></li>
                    <li><a>Mobile Whatsapp : +225 0778484847</a></li>
                    <li><a>Email :info@thortechnologie.com</a></li>
                  </ul>
                </li>
				        <li><a href="/login_client"><i class="icon-user"></i> @yield('onglet', 'Espace client')</a></li>
				 
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
       @yield('content')
    </div>
   
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            
          
          </div>
          <div class="span3">
            <h4><i class="icon-beaker icon-white"></i> A propos de nous</h4>
            <nav>
              <ul class="quick-links">
                  <li><a href="#">L'équipe</a></li>
                  <li><a href="#">Partenaires</a></li>
                  
              </ul>
            </nav>          
          </div>
          
          <div class="span3">
            <h4><i class="icon-globe"></i> Social</h4>
            <div class="social-icons-row quick-links">
              <ul class="quick-links">
                 <!--<li><a href="https://twitter.com/TechnologieThor">Twitter<i class="icon-twitter" style="font-size: 20px;"></i></a></li>-->
                 <li><a href="https://www.facebook.com/profile.php?id=100090423441806">Facebook<i class="icon-facebook" style="font-size: 20px;"></i></a></li>
                 <li><a href="https://maps.app.goo.gl/8BVnv7fvRnsTmcSs6">Localisation<i class="icon-map-marker" style="font-size: 20px;"></i></a></li>
                 <li><a href="https://www.linkedin.com/in/thor-technologie-5013231b9/?originalSubdomain=ci" >LinkedIn<i class="icon-linkedin" style="font-size: 20px;"></i></a></li>
              </ul>
            </div>
            
          </div> 
			    <!--<div class="span3">
            <h4>Nos contacts</h4>
            <i class="icon-phone icon-large phone-number"></i> +225 0778484847<br>

          
          </div>
          <div class="span3">
            <h4>Restez informé des nouveautés</h4>
            <form>
              <input type="text" name="email" placeholder="Email">
              <input type="submit" class="btn btn-primary" value="S'abonner">
            </form>
			  
          </div>-->
		  
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; THOR TECHNOLOGIE 2023, Tous Droits réservés.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
    <!--<script type="module" src="js/trace.js"></script>-->
	
	
  </body>
</html>

