<?php ob_start(); 
?>


<div class="container mt-5 text-center">

    <h1 class="mt-5 text-center">Je vais deviner le nombre auquel vous pensez!</h1>

</div>



<div class="container mt-5">
<form action="game1.php" method="POST">
    <label for="number">Choisir un nombre :</label>
    <input type="number" class="form-control" id="number" name="number">
    <input class="mt-4" type="submit" value="Jouer">
</form>
</div>


<?php

    $nombre_choisi = rand(1, 100);
    $nombre_saisi  = $_POST['number'];
    while(true) {
        if ($nombre_saisi == $nombre_choisi) {
            $resultat = "Vous avez gagnez";
            break;
        } else if ($nombre_saisi > $nombre_choisi) {
            $resultat = "Votre nombre est plus grand";  
            break;
        } else {
            $resultat = "Votre nombre est plus petit";
            break;
        }
    }



?>




















<?php $content = ob_get_clean();
require 'template.php';
?>
