<?php ob_start(); ?>



<section>
    <div class="container h-50 pt-5 text-center">

        

    
            <a href="index.php" class="btn text-dark border-dark">Home</a>
    

        
            <a href="ajouterCompte.php" class="btn text-dark border-dark bg-primary">Ajouter des données</a>
        
        

    </div>

    




</section>









<?php $content = ob_get_clean();
require 'template.php';
?>