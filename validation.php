<?php
session_start();
include("BDD.php");
?>

<?php







$req = $bdd->prepare('INSERT INTO biens(type_bien, image, date, adr_bien, adr2_bien, cp_bien, ville_bien, surface_bien, prix_bien, type_chauff_bien, description_bien, type_vente_bien) VALUES(:type_bien, :image, :date, :adr_bien, :adr2_bien, :cp_bien, :ville_bien, :surface_bien, prix_bien, type_chauff_bien, description_bien, type_vente_bien)');
$req->execute(array(
	'type_bien' => $_POST['choix2'],
	'image' => $nom_definitif,
	'date' => $_POST['date'],
	'adr_bien' => $_POST['adr'],
	'adr2_bien' => $_POST['adr2'],
	'cp_bien' => $_POST['cp'],
	'ville_bien' => $_POST['ville'],
	'surface_bien' => $_POST['surface'],
	'prix_bien' => $_POST['prix'],
	'type_chauff_bien' => $_POST['type'],
	'description_bien' => $_POST['contenu'],
	'type_vente_bien' => $_POST['choix1'],
	));
?>
