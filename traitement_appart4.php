<?php
include ('header.php');
include("BDD.php");
 $reponse = $_POST['type_chauff_bien'];

$req = "SELECT * FROM biens WHERE type_chauff_bien = :type_chauff_bien";
$req = $bdd -> prepare($req);
$req ->execute(array(
	'type_chauff_bien' => $reponse
	));
while ($req2=$req->fetch()) {?>

<div id="placement"><img id='image' src="image/<?php echo $req2['image']; ?>" />

 <p><?php echo $req2['type_bien'];?></p>

<p><?php echo $req2['type_vente_bien'];?></p>
<p><?php 
   $datephp = strtotime($req2['date']);
   $bonnedate = date('d F Y',$datephp);
   echo($bonnedate);?></p>
<p><?php echo $req2['ville_bien'];?></p>
<p><?php echo $req2['surface_bien'],"m2";?></p>
<p><?php echo $req2['prix_bien'],'€';?></p>
<p>Chauffage : <?php echo $req2['type_chauff_bien'];?></p>
<p>Description : <?php echo $req2['description_bien'];?></p></div><?php

}