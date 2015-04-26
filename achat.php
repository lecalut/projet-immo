<?php
session_start();
include("BDD.php");
?>

  <a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>



<?php

$sql = "SELECT type_bien, image, date, cp_bien, ville_bien, surface_bien, prix_bien, type_chauff_bien, description_bien, type_vente_bien FROM biens ORDER BY date DESC";
$req = $bdd->prepare($sql);
$req->execute(array(
));
while ($donne = $req->fetch() ) 
{
?>

<div><img src="image/<?php echo $donne['image']; ?>" />

<?php 
echo $donne['type_bien'];
echo $donne['type_vente_bien'];
echo $donne['date'];
echo $donne['cp_bien'];
echo $donne['ville_bien'];
echo $donne['surface_bien'];
echo $donne['prix_bien'];
echo $donne['type_chauff_bien'];
echo $donne['description_bien'];


} 

?>
</div>

  <a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>
