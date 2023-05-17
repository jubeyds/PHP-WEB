<? ob_start(); ?>




<h1 class="container mt-5 text-center">LES COOKIES</h1>



<form class="container mt-5 perso" action="cookie1.php" method="POST">
<div class="mb-3">
  

 <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Choisir une langue :</label>
      <select class="form-control" id="exampleSelect1" name="langue">
        <option value ="fr">Français</option>
        <option value="es">Espagnol</option>
        <option value="en">Anglais</option>
      </select>
 </div>

<input class="mt-4 btn btn-primary" type="submit" value="Envoyer">
</form>



<div class="container mt-5">
<?php

// Vérification si le formulaire a été soumis

if(isset($_POST['langue'])) {

  // Récupération de la langue choisie par l'utilisateur

  $langue = $_POST['langue'];

  // Stockage de la langue choisie dans un cookie pour une heure

  setcookie('langue', $langue, time() + 3600);

} else {

  // Si aucun choix de langue n'a été soumis, on vérifie si un cookie existe

  if(isset($_COOKIE['langue'])) {

    // Récupération de la langue stockée dans le cookie

    $langue = $_COOKIE['langue'];

  } else {

    // Si aucun cookie n'existe, on utilise la langue par défaut (français)
    
    $langue = 'fr';

  }

}

// Affichage du texte en fonction de la langue choisie

switch($langue) {

  case 'fr':
    include 'france.php';
    break;

  case 'es':
    include 'spain.php';
    break;

  case 'en':
    include 'usa.php';
    break;

    

}
?>

</div>





<?php $content = ob_get_clean();
require 'template.php';
?>