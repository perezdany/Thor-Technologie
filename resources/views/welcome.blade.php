<?php
  //code pour compter le nombr devisiteurs et leurs métadonnées
 /*
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
*/
?>
@extends('layouts/base')
    

	

	@section('content')
    <!-- Start: MAIN CONTENT -->
  <div class="container">
    <div class="page-header">
       <h1>THOR TECHNOLOGIE, <small> Le savoir-faire au quotidien</small></h1>
    </div>
    <div class="container-fluid ">   
		  <div class="row-fluid ">
			  <div class="span7">
				<p>
				  Entreprise Informatique spécialisée dans la maintenance et l'entretien des produits APPLE (Macs, IPhones, IPads...).confiez nous vos appareils.
				</p>
				<p>
				  Nous sommes THOR TECHNOLOGIE et nous sommes à votre services pour tous besoins en maintenance de vos ordinateurs.
				  Nous résolvons vos problèmes technologiques grâce à nos produits géniaux.
				  Un résultat satifaisant avec une garantie raisonnable.
				</p>
				<p>
					Meci de nous faire confiance.
				  	<br>nous sommes situé à: <strong>Cocody Vallon, Abidjan, Côte d'Ivoire<strong>
				</p>
				         
          	</div>
          	<div class="span4">
           
				<p>
				  <video width="350" heith="250" controls> <source src="mavideo.mp4" type="video/mp4"> <source src="mavideo.ogg" type="video/ogg"> Votre navigateur est incompatible </video>
				</p>            
          	</div>   
		  </div>
                            
    </div>

    <div class="container-fluid ">
      <div class="row-fluid ">
        <div class="span12">
          <p>
            <h6>
              </b><i>NB </i><b>: THOR TECHNOLOGIE garantie toutes ses réparations sur SIX (6) mois pièces et main d’œuvre. Les frais de diagnostics 25 000f ne sont pas remboursable.<br>
              -Le délai de réparation est de dix (10) jours OUVRABLE. <br>
                -Passé le délai de deux (2) semaines, nous déclinons   toutes responsabilités pour un (1) appareil non retiré.<br>
              -Après six (6) mois, des frais de magasinage seront appliqués à raison de 500f / jours. <br>
              -Après un (1) an (soit 12 mois), les appareils non retirés seront vendus aux enchères.
            </h6>
          </p>       
        </div>    
      </div>
    </div>

    <div class="slider">
      <div class="container-fluid">
        <div id="heroSlider" class="carousel slide">
          <div class="carousel-inner">
            <div class="active item">
              <div class="hero-unit">
                <div class="row-fluid">
                  <div class="span7 marketting-info">
                    <h3>Thor technologie</h3>
                    <p>
                      Les appareils de marque Apple n'ont plus de secret pour nous.
                      Confiez nous vos appareils. vous ne serez pas déçu.
                    </p>
                                       
                  </div>
                  <div class="span5">
                    <img src="img/thor_tech680x453.jpg" class="thumbnail">
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="hero-unit">
                <div class="row-fluid">
                  <div class="span7 marketting-info">
                    <h3>Thor technologie</h3>
                    <p>
                      Maintenance et Dépannage d'ordinateur, Mac, Iphone, Hp, Lenovo etc...
                    </p>
                                 
                  </div>
                  <div class="span5">
                    <img src="img/2.jpg" class="thumbnail">
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="hero-unit">
                <div class="row-fluid">
                  <div class="span7 marketting-info">
                    <h3>Thor technologie</h3>
                    <p>
                      Déblocage des systèmes IOS de tout genre; même les téléphones importés.
                    </p>
                                 
                  </div>
                  <div class="span5">
                    <img src="img/iphone1680x453.png" class="thumbnail">
                  </div>
                </div>                  
              </div>
            </div>
            <div class="item">
              <div class="hero-unit">
                <div class="row-fluid">
                  <div class="span7 marketting-info">
                    <h3>Thor technologie</h3>
                    <p>
                      Des délais de livraison raisonnables avec satisfaction à l'appui
                    </p>
                                 
                  </div>
                  <div class="span5">
                    <img src="img/1.jpg" class="thumbnail">
                  </div>
                </div>                  
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
        </div>
      </div>
    </div>
    <!-- End: slider -->
     
     
      <p><marquee><h4><i><font size="" color="#0091CA">Ce site est actuellement en construction !!</font></i></h4></marquee></p>
 </div>

    <!-- End: MAIN CONTENT -->
    @endsection