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
    $_SESSION['pseudo'] = 0;
    $_SESSION['id'] = 0;

    echo "Vous avez &eacutet&eacute d&eacuteconnect&eacute !";

?>   

    
 

</div>
<?php
header ("Refresh: 2;URL=index.php");
?>