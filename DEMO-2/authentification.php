<?php ob_start(); ?>


<section class="container h-50 pt-5">

            <div class="row justify-content-center gap-5">

                <div class="card col-5 bg-warning pb-5 shadow-lg">
                    <div class="card-body">
                        <h2 class="card-title text-white">Authentification</h2>
                        <form class="container mt-5 perso" action="authentification.php" method="POST">
                            <label for="text">Identifiant</label>
                            <input type="text" class="form-control" placeholder="Taper votre identifiant" id="nom" name="identifiant">
                            <label for="mail">Adresse email</label>
                            <input type="mail" class="form-control" placeholder="Taper votre adresse email" id="mail" name="email" value="">
                            <input class="mt-4" type="submit" value="Sign in">
                        
                        </form>
                    </div>
                </div>


<section>

<?php

// Cette regex permet de valider une chaîne de caractères de 8 caractères 
// contenant au moins une majuscule, une minuscule, un chiffre et un caractère spécial.

$regex1 = '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_]).{8}$/';

// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération de la valeur de l'identifiant depuis le formulaire
    $identifiant = isset($_POST['identifiant']) ? $_POST['identifiant'] : '';

    // Validation de l'identifiant à l'aide de la regex
    if (preg_match($regex1, $identifiant)) {
        // L'identifiant est valide
        echo "L'identifiant $identifiant est valide.";
    } else {
        // L'identifiant est invalide
        echo "L'identifiant $identifiant est invalide.";
    }
}

// ecrire un regex pour un mail
$regex2 = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/'; 

// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     Récupération de l'adresse email
    $email = isset($_POST['email']) ? $_POST['email'] : '';
//     Validation de l'adresse email
    if (preg_match($regex2, $email)) {
//         L'adresse email est valide
        echo "L'adresse email $email est valide.";
    } else {
//         L'adresse email est invalide
        echo "L'adresse email $email est invalide.";
    }
}




?>





<?php
$content = ob_get_clean();
require 'template.php';
?>
