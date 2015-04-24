<?php
session_start();
include("BDD.php");
?>


<div class="enregistrement_formulaire">
<h2>Veuillez renseigner toutes les informations pour ajouter un bien</h2>
 <form method="post" action="validation.php" enctype="multipart/form-data">
    <input type="radio" name="choix1" value="Achat">Achat
    <input type="radio" name="choix1" value="Location">Location</br>


    <input type="radio" name="choix2" value="Maison" checked>Maison
    <input type="radio" name="choix2" value="Appartement">Appartement</br>

    <div class="image_upload">
        <label for="image">Fichier a uploader : </label><br />
        <input type="file" name="image" id="image"></br>
    </div>

    <input type="date" name="date" size="10">Date d'ajout du bien</br>
     
    <input type="text" name="adr" placeholder="Adresse" size="255"></br>
    <input type="text" name="adr2" placeholder="Adresse 2" size="255"></br>
    <input type="text" name="cp" placeholder="Code postal" size="255"></br>
    <input type="text" name="ville" placeholder="Ville" size="255"></br>
	<input type="number" name="prix">Indiquer le prix/loyer du bien</br>
	<input type="number" name="surface">Indiquer la surface du bien</br>

    <label for="type">Type de chauffage</label></br>
    <select name="type">
        <option value="Electrique">Electrique</option>
        <option value="Fioul">Fioul</option>
        <option value="Bois">Bois</option>
        <option value="Solaire">Solaire</option>
        <option value="Gaz">Gaz</option>
        <option value="Mixte">Mixte</option>
        <option value="Pompe à chaleur">Pompe à chaleur</option>
        <option value="Autre">Autre</option>
    </select></br>


     <textarea name="contenu" placeholder="Description du bien"></textarea></br>
     <input type="submit" value="Poster !">
   
   <?php
?>
 </form>
</div>
