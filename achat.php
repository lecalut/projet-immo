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


 		<p>Type d'achat
  <form method="post" action="traitement_appart1.php">
  <p>
     <select name="type_vente_bien" id="sexe">
     	 <option value="Location">Location</option>
           <option value="Vente">Vente</option>
 		</select>
     <input type="submit" value="Envoyer" />
     </p></form></p>

 		<p>Superficie
  <form method="post" action="traitement_appart2.php">
  <p>
     <select name="surface_bien" id="sexe">
     	 <option value="55">55</option>
     	 <option value="80">80</option>
     	 <option value="70">70</option>
     	 <option value="35">35</option>
     	 <option value="10">10</option>
     	 <option value="150">150</option>
     	 <option value="450">450</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form></p>


 		<p>Prix
  <form method="post" action="traitement_appart3.php">
  <p>
     <select name="prix_bien" id="sexe">
     	 <option value="650.000">650.000</option>
           <option value="Maison">maison</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form></p>


 		<p>Chauffage
  <form method="post" action="traitement_appart4.php">
  <p>
     <select name="type_chauff_bien" id="sexe">
     	 <option value="Electrique">electrique</option>
           <option value="Fioul">fioul</option>
           <option value="Bois">bois</option>
           <option value="solaire">solaire</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form></p>

 		<p>Ville
  <form method="post" action="traitement_appart5.php">
  <p>
     <select name="ville_bien" id="sexe">
     	 <option value="Lyon">Lyon</option>
           <option value="Caluire et cuire">Caluire et cuire</option>
           <option value="Meyzieu">Meyzieu</option>
           <option value="Bron">Bron</option>
           <option value="Oulins">Oulins</option>
           <option value="Venissieux">Venissieux</option>
     </select>
     <input type="submit" value="Envoyer" />
     </p></form></p>
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
<p><?php 
   $datephp = strtotime($donne['date']);
   $bonnedate = date('d F Y',$datephp);
   echo($bonnedate);?></p>
<p><?php echo $donne['ville_bien'];?></p>
<p><?php echo $donne['surface_bien'],"m2";?></p>
<p><?php echo $donne['prix_bien'],'€';?></p>
<p>Chauffage : <?php echo $donne['type_chauff_bien'];?></p>
<p>Description : <?php echo $donne['description_bien'];?></p></div><?php

 } 
?>



  <a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>
