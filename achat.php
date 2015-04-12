<?php
session_start();
include("BDD.php");
?>

  <a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>



<?php

$sql = "SELECT adr_bien, adr2_bien, image FROM biens ";
$req = $bdd->prepare($sql);
$req->execute(array(
));
while ($donne = $req->fetch() ) 
{
?>

<div><img src="image/<?php echo $donne['image']; ?>" />
<?php 

} 

?>
</div>

  <a id="Accueil" href="index.php"><i class="fa fa-arrow-circle-left"></i></a>
