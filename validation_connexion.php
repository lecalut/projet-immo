<?php
session_start();
include("BDD.php");
?>
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
   
echo "You are connected !";


}

$req->closeCursor();

?>

</div>


<?php
header ("Refresh: 0;URL=index.php");
?>