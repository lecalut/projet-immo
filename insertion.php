<?php
session_start();

include("BDD.php");
?>


<?php

$pass_crypte = sha1($_POST['mdp']);


 $sql = ('INSERT INTO employe(mail_employe, mdp, nom_employe, prenom_employe, tel_employe, adr_employe, adr2_employe, cp_employe, ville_employe, salaire_employe)
            VALUES (:mailemploye, :mdp, :nomemploye, :prenomemploye, :telemploye, :adremploye, :adr2employe, :cpemploye, :villeemploye, :salaireemploye)');
 $req = $bdd->prepare($sql);
 $req->execute(array(

  'mailemploye'   => $_POST['mail'],
  'mdp'           => $pass_crypte,
  'nomemploye'    => $_POST["nom"],
  'prenomemploye' => $_POST["prenom"],  
  'telemploye'    => $_POST["tel"],
  'adremploye'    => $_POST["adr"],
  'adr2employe'   => $_POST["adr2"],
  'cpemploye'     => $_POST["cp"],
  'villeemploye'  => $_POST["ville"],
  'salaireemploye'=> $_POST["salaire"]
 ));
?>


<?php


include("BDD.php");
?>