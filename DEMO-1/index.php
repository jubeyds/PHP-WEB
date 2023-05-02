<?php ob_start(); ?>


<h3>Je suis dans la page d'accueil</h3>
<form class="container mt-5 perso" action="traitement.php" method="POST">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" placeholder="first name" id="nom" name="name">
    <label for="email">Email :</label>
    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
    <input class="mt-4" type="submit" value="Envoyer">


<?php
$content = ob_get_clean();
require 'template.php';
?>