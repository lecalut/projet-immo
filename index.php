<?php
session_start();
include("BDD.php");
?>
<html>
	<head>
 	<link rel="stylesheet" type="text/css" href="Agence.css"/>
 	<link rel="icon" type="image/jpg" href="favicon.jpg" />
 	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 	<title>
  	Immo Lyon
 	</title>
	</head>
<body>
<img class="logo" src="Immologo.png">
<div class="pseudo">
  <?php
    if (!empty($_SESSION['pseudo'])) 
    {
      echo "Bienvenue ", $_SESSION['pseudo'];
    }
  ?>
</div>
<nav>
  <UL>
   <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
          <i class="fa fa-home"></i>
        </div>
        <a href="index.php"><span>Accueil</span></a>
      </div>
   </li>
   <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
          <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="achat.php"><span>Achats et Locations</span></a>
      </div>
   </li>
   <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
          <i class="fa fa-phone"></i>
        </div>
        <a href="Contact.php"><span>Nous contacter</span></a>
      </div>
   </li>




  <?php
    if (empty($_SESSION['pseudo']))
    {
  ?>    
  <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
          <i class="fa fa-key"></i>
        </div>
      <a href="Connexion.php"><span>Connexion employ&eacute</span></a>
      </div>
  </li>
  <?php
    }
    if (!empty($_SESSION['pseudo']))
    {
  ?>      
<li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
          <i class="fa fa-cart-plus"></i>
        </div>
      <a href="ajoutbiens.php"><span>Ajouter un biens</span></a>
      </div>
  </li>
  <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
          <i class="fa fa-key"></i>
        </div>
      <a href="deconnexion.php"><span>D&eacuteconnexion employ&eacute</span></a>
      </div>
  </li>



  <?php
    }
  ?>
  </UL>
</nav>
