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
<div class="inscription">
<?php
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$sql = "SELECT id FROM employe WHERE pseudo = :pseudo AND mdp = :mdp";
// Vérification des identifiants
$req = $bdd->prepare($sql);
$req->execute(array(
    'pseudo' => $pseudo,
    'mdp' => $mdp,
    ));

$resultat = $req->rowCount();





if ($resultat == 0)
{
    echo 'Identifiant incorrect !';

}
else
{
   
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
   
echo "Vous &ecirctes connect&eacute !";


}

$req->closeCursor();

?>

</div>


<?php
header ("Refresh: 2;URL=index.php");
?>