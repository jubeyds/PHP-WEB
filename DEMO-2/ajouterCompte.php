<?php ob_start(); ?>
<?php session_start(); ?>



<section>

<div class="container">


        <a href="index.php" class="btn text-dark border-dark">Home</a>
        </div>

        <h1 div class="container text-center"> Ajouter un compte </h1>
    


        <form class="container mt-5 perso" action="traitement.php" method="POST">
                            <label for="text">Prénom</label>
                            <input type="text" class="form-control" placeholder="Taper votre prénom" id="prenom" name="prenom">
                            <label for="text">Nom</label>
                            <input type="text" class="form-control" placeholder="Taper votre nom" id="name" name="nom">
                            <label for="text">Age (18 à 70 ans)</label>
                            <input type="text" class="form-control" placeholder="Taper votre âge" id="age" name="age">
                            <label for="text">Taille</label>
                            <input type="text" class="form-control" placeholder="Taper votre taille" id="taille" name="taille">

                            <div class="form-check">
        <input class="form-check-input" type="radio" name="homme" id="optionsRadios1" value="homme" checked="">
        <label class="form-check-label" for="optionsRadios1">
          Homme
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="femme" id="optionsRadios2" value="Femme">
        <label class="form-check-label" for="optionsRadios2">
          Femme
        </label>
      </div>

                            <input class="mt-4" type="submit" value="Envoyer">
                        
        </form>

    
    





</section>






<?php $content = ob_get_clean();
require 'template.php';
?>