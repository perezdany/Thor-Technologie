<?php
  //code pour compter le nombr devisiteurs et leurs métadonnées
 
  //fonction pour chercher une chaine dans le fihier
  function Recherche($lefichier, $chaine){
     //$iNbCharChercher = strlen($arszChercherChaine); 
       
       $szOutPut = implode("", file($lefichier)); 
       
       //$iNbCharFichier = intval(strlen($szOutPut)); 
       return strpos($szOutPut, $chaine);
    }


  function Lastnumber($lefichier, $chaine) //rechercher et retourner le dernier caractèe du nom de "VISITEUR :"
  {
    
    $szOutPut = implode("", file($lefichier)); 
    return mb_strrchr($szOutPut, $chaine, $before_caract = false); 
       
  }
  
  $nb_visiteur = 0; // instanciation du nombre de visiteurs
  $chv = "VISITEURS =";
  $_SERVER["REMOTE_ADDR"];
  //$_SERVER['REMOTE_HOST'];
  $path = 'stats/visiteurs.txt';


  $add_ip = strval("".$_SERVER["REMOTE_ADDR"]."");//adresse Ip du client

  $machine = $_SERVER['HTTP_USER_AGENT']; //gethostbyaddr( $_SERVER["REMOTE_ADDR"]);//strval("".$_SERVER['REMOTE_HOST']."");// nom du client

  //echo "<h1>".get_browser($_SERVER['HTTP_USER_AGENT'])."</h1>";

  $fichier = fopen($path, 'c+b');
  $resultat = Recherche($path, $add_ip); //vrivier si ya une chaine dans ce fichier
  
  if($resultat != False)//on a pas trouvé d'addresse
  {
    $info = Lastnumber($path, $chv); //recher le derier nombre de visiteur
    
    //on va ensuite tronquer cette chaine
    $of = strlen($info)-strlen($chv);
    $n = intval(substr($info, -1*$of));
    $nb_visiteur = $n;
    $chaine = "ADRESSE IP= ".$add_ip." ||DATE= ".date('d/m/Y')." ||HEURE= ".date('H:i:s')."||CLIENT= ".$machine."||VISITEURS =".$nb_visiteur."\n";   
  }
  else
  {
    $info = Lastnumber($path, $chv);
  
    $of = strlen($info)-strlen($chv);
    $n = intval(substr($info, -1*$of));
    $nb_visiteur = $n+1;
    $chaine = "ADRESSE IP= ".$add_ip." ||DATE= ".date('d/m/Y')." ||HEURE= ".date('H:i:s')."||CLIENT= ".$machine."||VISITEURS =".$nb_visiteur."\n";    
  }

  //echo "<h1>résultats:".$info."|||".$resultat."|||".$nb_visiteur;
  fseek($fichier, filesize('stats/visiteurs.txt'));
  fwrite($fichier, $chaine);

?>
@extends('layouts/base')
    

	@section('content')
     <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/partners/aitek.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/partners/caex.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/partners/endeavour-logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/partners/pratik.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/partners/logo-CEFIS.jpg.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/partners/AppleL.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>
    <section id="" class="cliens section-bg">
      <div class="container">

      <div class="row" data-aos="zoom-in">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/partners/hp.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/partners/dell.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/partners/Lenovo-Logo.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/partners/asus.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/partners/client-5.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/partners/client-6.png" class="img-fluid" alt="">
        </div>

      </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A Propos de Nous</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              THOR TECHNOLOGIE est une entreprise informatique spécialisée dans la maintenance et l'entretien des produits informatiques, sutout des produits de marques APPLE (Macs, IPhones, IPads...). Vous pouvez nous confier vos appareils en toute quiétude. 
            </p>
            <!--<ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>-->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              THOR TECHNOLOGIE est constituée d'une équipe de talentueux, passionnés avec un savoir-faire irréprochable pour votre satisfaction. Un résultat satifaisant avec une garantie raisonnable. Du matériel de pointe, un cadre accueillant rassurant et chaleureux.
            </p>
            <!--<a href="#" class="btn-learn-more">En savoir plus</a><br>-->
          </div>
      
        </div>
    <div class="row content">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content">
          <h3>Le <strong>Savoir-Faire au quotidien</strong></h3>
          <p>
           NB : THOR TECHNOLOGIE garantie toutes ses réparations sur SIX (6) mois pièces et main d’œuvre. Les frais de diagnostics 25 000f ne sont pas remboursable.<br>
          <strong>Le délai de réparation est de dix (10) jours OUVRABLE.<br>
          Passé le délai de deux (2) semaines, nous déclinons toutes responsabilités pour un (1) appareil non retiré.<br>
          Après six (6) mois, des frais de magasinage seront appliqués à raison de 500f / jours.<br>
          Après un (1) an (soit 12 mois), les appareils non retirés seront vendus aux enchères.</strong>


          </p>
        </div>

        <div class="accordion-list">
          <ul>

          <li>
            <b><a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Maintenance et Déblocage d'appareil Apple, Windows et bien d'autres<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a></b>

          </li>

          <li>
            <b><a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Déblocaque systèmes IOS de tou genre, mêmes importés.(Mac, iphones etc...) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a></b>

          </li>

           <li>
            <b><a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Remplacement d'accesoires (écran, clavier etc...) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a></b>

          </li>
          <li>
            <b><a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Ventes de matériels informatiques <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a></b>

          </li>

          </ul>
        </div>

        </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('assets/img/1.jpg');" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Nos services sont variés dans le soucis de répondre a vois besoins efficaement.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-apple"></i></div>
              <h4><a href="">Déblocage IOS</a></h4>
              <p>Pour tous vos téléphones Iphone bloqués et dont vous n'avez plus accès.
        Une mise à jour s'est mal déroulée?
        Faites nous parvenir l'appareil afin de vous proposer des solutions
        </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-cog"></i></div>
              <h4><a href="">Réparations et Maitenance</a></h4>
              <p>
          <ul>
            <li>Réparation sur carte mère.</li>
            <li>Remplacement d'écran défectueux.</li>
            <li>Remplacement de battérie.</li>
            <li>Remplacement de clavier, et bien d'autres.</li>
            <li>Augmentation de la mémoire RAM</li>
          </ul>
         </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-network-chart"></i></div>
              <h4><a href="">Déploiement Réseaux Informatique</a></h4>
              <p>Architecture et mise en place du réseaux avec des techniciens compétents. </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-windows"></i></div>
              <h4><a href="">Installation de système Office et autres</a></h4>
              <p>Microsoft WIndows XP, 7, 8, 10, 11... Pack office et licence. </p>
            </div>
          </div>

        </div>
      <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-deviantart"></i></div>
              <h4><a href="">Installation de caméra de surveillance</a></h4>
              <p>Installation de caméra de surveillance dans les bureaux, les chambres etc...</p>
            </div>
          </div>

         

        </div>
    
      </div>
    </section><!-- End Services Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>THOR TECHNOLOGIE est situé à Cocody II Plateaux Vallons, Rue J81, après le groupe scolaire les Dauphins.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="info" >
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localisation:</h4>
                <p><a href=" https://goo.gl/maps/1D9Y9JSCtajfCZpV6">Cocody II Plateaux Vallons, Rue J87.</a></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:info@thortechnologie.com">info@thortechnologie.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+225 27 35 98 24 50</p>
              </div>

             
        
            </div>

          </div>

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="info">
              <iframe src="https://www.google.com/maps/d/embed?mid=1Xi1XYsdMWC57cDItxnDUSlhOiKomJIo&ehbc=2E312F"  frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
               
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <!-- End: MAIN CONTENT -->
  @endsection