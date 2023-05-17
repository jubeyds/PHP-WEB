<?php ob_start(); ?>
<?php session_start(); 

$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$age = $_SESSION['age'];
$taille = $_SESSION['taille'];




?>

<div class="container">

    <h1>Votre compte</h1>

    <?php
        $tab = [
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'taille' => $taille,
        
            
        ]

    ?>



<br>

<div class="home mt-5">
            <a href="index.php" class="btn text-dark border-dark">Home</a>
        </div>

<form class="card mt-5" method="POST">
    <input type="submit" name="débogade" value="Débogage">
    <input type="submit" name="concaténation" value="Concaténation">
    <input type="submit" name="boucle" value="Boucle">
    <input type="submit" name="fonction" value="Fonction">
</form>

<!-- faire un bouton supprimer -->
<div class="btn-group mt-5">
    <a href="delete.php" class="btn text-dark border-dark">Supprimer</a>
</div>

<?php

if (array_key_exists('débogade', $_POST)) {
    switch ($_POST) {
        case array_key_exists('débogade', $_POST):
            print_r($tab);
            break;
        case array_key_exists('concaténation', $_POST):
            

            
    
    

}
}
?>








<?php
$content = ob_get_clean();
require 'template.php';
?>