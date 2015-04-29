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
<body>
<p id="Contact">Nous Contacter</p>

<iframe id="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44530.67626440062!2d4.88390433828127!3d45.767837984111125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea8ef11e830d%3A0xfeef839e1645ec3c!2s2+Rue+Curie%2C+69006+Lyon!5e0!3m2!1sfr!2sfr!4v1427399601393" width="1000" height="650" frameborder="0" style="border:0"></iframe>    <form method="get" action="">
    <label for="Name"/>
    <input type="text" id="Name"placeholder="Name"/><br>
      <label for="Email Address"/>
      <input type="email" id="Email" placeholder="Email Address"/><br>
        <label for="Subject"/>
        <input type="text" id="subject"placeholder="Subject"/><br>
          <textarea id="message"></textarea>
            <input id="tour" type="submit"value="SEND MESSAGE"/>
  <ol id="adr">
<li><p>Immo Lyon <br> 2 Rue Curie <br> 69000 Lyon <br> 04 74 51 85 36</p></li>
<li><p>Immo Villeurbanne <br> 3 Rue Curie <br> 69100 Villeurbanne <br> 04 78 51 13 74</p></li>
<li><p>Immo Bron <br> 15 Avenue des champs <br> 69400 Bron <br> 06 85 15 95 74</p></li>
<li><p>Immo Caluire <br> 15 Avenue des pommiers <br> 69300 Caluire et cuire <br> 04 78 14 85 96</p></li>
<li><p>Immo Meyzieu <br> 1 Rue des yeux <br> 69330 Meyzieu <br> 06 41 11 25 44</p></li>
  </ol>




  
  </UL>
</nav>

  </body>
</html>
