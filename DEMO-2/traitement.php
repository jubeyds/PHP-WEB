<?php ob_start(); ?>
<?php session_start(); ?>

<h1 class="container text-center">Votre compte</h1>

<div class="container">

    <?php

    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['taille'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $taille = $_POST['taille'];

        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['age'] = $age;
        $_SESSION['taille'] = $taille;

        echo "Bonjour " . $prenom . " " . $nom . " !" . "<br>";
        
        echo "Cliquer <a href='compte.php'>ici</a> pour accéder à votre compte.";
        
    }



    ?>








<?php
$content = ob_get_clean();
require 'template.php';
?>