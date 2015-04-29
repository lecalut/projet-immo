<?php
session_start();
include("BDD.php");
include("header.php");
?>
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
      <a href="index.php"><div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
          <i class="fa fa-home"></i>
        </div>
        <p>Accueil</p>
      </div></a>
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

<div class="slider">
  <input type="radio" name="slide_switch" id="id1"/>
  <label for="id1">
    <img src="image/10.jpg" width="100"/>
  </label>
  <img src="image/10.jpg"/>
  
  <!--Lets show the second image by default on page load-->
  <input type="radio" name="slide_switch" id="id2" checked="checked"/>
  <label for="id2">
    <img src="image/11.jpg" width="100"/>
  </label>
  <img src="image/11.jpg"/>
  
  <input type="radio" name="slide_switch" id="id3"/>
  <label for="id3">
    <img src="image/12.jpg" width="100"/>
  </label>
  <img src="image/12.jpg"/>
  
  <input type="radio" name="slide_switch" id="id4"/>
  <label for="id4">
    <img src="image/13.jpg" width="100"/>
  </label>
  <img src="image/13.jpg"/>
  
  <input type="radio" name="slide_switch" id="id5"/>
  <label for="id5">
    <img src="image/14.jpg" width="100"/>
  </label>
  <img src="image/14.jpg"/>
</div>
<script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>



