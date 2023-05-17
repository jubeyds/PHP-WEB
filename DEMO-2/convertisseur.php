<?php ob_start(); ?>


<?php
require 'fonction.php';
?>




<section class="container h-50 pt-5">

            <div class="row justify-content-center gap-5">

                <div class="card col-5 bg-dark pb-5 shadow-lg">
                    <div class="card-body">
                        <h2 class="card-title text-white">Convertisseur Romain</h2>
                        <form class="container mt-5 perso" action="convertisseur.php" method="POST">
                            <label for="nombres">Nombres</label>
                            <input type="nomber" class="form-control" placeholder="Nombre à convertir" id="nom" name="number">
                            <label for="resultat">Résultat :</label>
                            <input type="nomber" class="form-control" placeholder="Résultat" id="resultat" name="resultat" value="
                            <?php
                            echo convertir($_POST['number']);
                            ?>
                            ">
                            <input class="mt-4" type="submit" value="Convertir">
                        
                        </form>
                    </div>
                </div>


<section>

<?php
$content = ob_get_clean();
require 'template.php';
?>
