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

// Cette regex permet de valider une chaîne de caractères de 8 caractère 
// contenant au moins une majuscule, une minuscule, un chiffre et un caractère spécial.

$regex1 = '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_]).{8}$/';



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


// ecrire un regex pour un mail
$regex2 = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/'; 



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


//Cette ligne de code est une expression ternaire qui permet de vérifier si le champ de formulaire "identifiant" a été soumis via la méthode POST.

// Voici comment cette expression ternaire fonctionne :

// La fonction isset($_POST['identifiant']) vérifie si le champ "identifiant" a été soumis via une méthode POST. Si c'est le cas, cette fonction renvoie true. Si ce n'est pas le cas, elle renvoie false.
// Le symbole ? est utilisé pour séparer la condition de la valeur qui sera attribuée à la variable $identifiant en cas de condition vraie.
// Si la fonction isset($_POST['identifiant']) renvoie true, la valeur du champ "identifiant" soumis via la méthode POST sera affectée à la variable $identifiant. Dans ce cas, la première partie de l'expression ternaire est exécutée : $_POST['identifiant'].
// Si la fonction isset($_POST['identifiant']) renvoie false, une chaîne de caractères vide sera affectée à la variable $identifiant. Dans ce cas, la deuxième partie de l'expression ternaire est exécutée : ''.
// En résumé, cette ligne de code affecte la valeur soumise du champ de formulaire "identifiant" à la variable $identifiant si le champ a été soumis via la méthode POST, sinon une chaîne de caractères vide est affectée à la variable $identifiant. Cela permet de s'assurer que la variable $identifiant contient toujours une valeur, même si aucun champ "identifiant" n'a été soumis dans le formulaire.








?>





<?php
$content = ob_get_clean();
require 'template.php';
?>
