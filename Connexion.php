<?php
session_start();
include("BDD.php");
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="Agence.css"/>
    <link rel="icon" type="image/jpg" href="favicon.jpg" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
      <meta charset="utf-8">

  <title> Immo Lyon </title>
  </head>

<p id="Connexion">Connexion Utilisateur</p>

    <div class="container">

      <div id="login">

        
 <form method="post" action="validation_connexion.php">
     <p><span <i class="fa fa-user"></i></span><input type="text" name="pseudo" placeholder="Pseudo" size="35">
     <p><span <i class="fa fa-unlock-alt"></i></span><input type="password" name="mdp" placeholder="Mot de passe" size="35">
     <input type="submit" value="connexion">
   
 </form>
      </div> <!-- end login -->
    </div>
<a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>

  </body>
</html>
