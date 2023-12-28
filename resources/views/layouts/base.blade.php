<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', config('app.name'))</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../public/assets/img/thor_logo32.png" rel="icon">
  <link href="../../public/assets/img/thor_logo180.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    
      <h1 class="logo me-auto"><a href="index.html">THOR TECHNOLOGIE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/welcome">Accueil</a></li>
          <li><a class="nav-link scrollto" href="/welcome#about">A propos de nous</a></li>
          <li><a class="nav-link scrollto" href="/welcome#services">Services</a></li>
          
          <li><a class="nav-link scrollto" href="/welcome#contact">Contact</a></li>
      <li><a class="nav-link scrollto" href="/login_client">Espace Client</a></li>
          <!--<li><a class="getstarted scrollto" href="#about">Get Started</a></li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
        THOR TECHNOLOGIE
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>THOR TECHNOLOGIE</h1>
          <h2> Le savoir-faire au quotidien</h2>
          <!--<div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>-->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="../../public/assets/img/thor_tech_sans_fond780x646.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    @yield('content')
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-3 footer-contact">
            <h3>THOR TECHNOLOGIE</h3>
            <p>
              Cocody <br>
             II Plateaux Vallons,<br>
              Rue J87.<br><br>
              <strong>Phone:</strong> +225 27 35 98 24 50 <br>
              <strong>Email:</strong> <a href="mailto:info@thortechnologie.com">info@thortechnologie.com</a><br>
            </p>
          </div>

          <div class="col-lg-4 col-md-3 footer-links">
            <h4>Liens</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">A propos de nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
        <li><i class="bx bx-chevron-right"></i> <a href="#">Espace Clients</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-3 footer-links">
            <h4>Réseaux sociaux</h4>
            <p>Vous pouvez nous retrouver sur nos différents canaux sociaux que voici:</p>
            <div class="social-links mt-3">
              <!--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
              <a href="https://www.facebook.com/profile.php?id=100090423441806" class="facebook"><i class="bx bxl-facebook"></i></a>
              <!--<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>-->
              <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
              <a href="https://www.linkedin.com/in/thor-technologie-5013231b9/?originalSubdomain=ci" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>THOR TECHNOLOGIE 2023</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        <font size="1px">By Danype</font>
      </div>

    
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../public/assets/vendor/aos/aos.js"></script>
  <script src="../../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../public/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!--<script src="../../public/assets/vendor/php-email-form/validate.js"></script>-->
  <script src="../../public/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../public/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="../../public/assets/js/main.js"></script>

</body>

</html>