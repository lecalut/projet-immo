<?php
include ('header.php');
include("BDD.php");
 $reponse = $_POST['type_vente_bien'];

$req = "SELECT * FROM biens WHERE type_vente_bien = :type_vente_bien";
$req = $bdd -> prepare($req);
$req ->execute(array(
	'type_vente_bien' => $reponse
	));
while ($req2=$req->fetch()) {?>

<div id="placement"><img id='image' src="image/<?php echo $donne['image']; ?>" />

 <p><?php echo $req2['type_bien'];?></p>

<p><?php echo $req2['type_vente_bien'];?></p>
<p><?php echo $req2['date'];?></p>
<p><?php echo $req2['ville_bien'];?></p>
<p><?php echo $req2['surface_bien'],"m2";?></p>
<p><?php echo $req2['prix_bien'],'€';?></p>
<p>Chauffage : <?php echo $req2['type_chauff_bien'];?></p>
<p>Description : <?php echo $req2['description_bien'];?></p></div><?php

}