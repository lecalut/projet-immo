<?php
session_start();
include("BDD.php");
include("header.php");
?>
 <div id="critere">
 	<li><p>Critères</p></li>
 	<li id="li"><p>Type de bien
  <form method="post" action="traitement_appart.php">
  <p>
     <select name="type_bien" id="sexe">
     	 <option value="Appartement">appartement</option>
           <option value="Maison">maison</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form></p>
 		<p>Type d'achat</p>
  <form method="post" action="traitement_appart.php">
  <p>
     <select name="type_vente_bien" id="sexe">
     	 <option value="Location">Location</option>
           <option value="Vente">Vente</option>
 		<p>Superficie</p>
  <form method="post" action="traitement_appart.php">
  <p>
     <select name="type_bien" id="sexe">
     	 <option value="Appartement">appartement</option>
           <option value="Maison">maison</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form>
 		<p>Prix</p>
  <form method="post" action="traitement_appart.php">
  <p>
     <select name="type_bien" id="sexe">
     	 <option value="Appartement">appartement</option>
           <option value="Maison">maison</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form>
 		<p>Chauffage</p>
  <form method="post" action="traitement_appart.php">
  <p>
     <select name="type_bien" id="sexe">
     	 <option value="Appartement">appartement</option>
           <option value="Maison">maison</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form>
 		<p>Ville</p>
  <form method="post" action="traitement_appart.php">
  <p>
     <select name="type_bien" id="sexe">
     	 <option value="Appartement">appartement</option>
           <option value="Maison">maison</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form>
 		<p>Nombre de piece</p>
  <form method="post" action="traitement_appart.php">
  <p>
     <select name="type_bien" id="sexe">
     	 <option value="Appartement">appartement</option>
           <option value="Maison">maison</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form>
 	</li>
 </div>
  <a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>




<?php

$sql = "SELECT * FROM biens  ORDER BY date DESC";
$req = $bdd->prepare($sql);
$req->execute(array(
)); ?>

 <?php while ($donne = $req->fetch() ) 

{
?>

<div id="placement"><img id='image' src="image/<?php echo $donne['image']; ?>" />

 <p><?php echo $donne['type_bien'];?></p>

<p><?php echo $donne['type_vente_bien'];?></p>
<p><?php echo $donne['date'];?></p>
<p><?php echo $donne['ville_bien'];?></p>
<p><?php echo $donne['surface_bien'],"m2";?></p>
<p><?php echo $donne['prix_bien'],'€';?></p>
<p>Chauffage : <?php echo $donne['type_chauff_bien'];?></p>
<p>Description : <?php echo $donne['description_bien'];?></p></div><?php

 } 
?>



  <a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>
