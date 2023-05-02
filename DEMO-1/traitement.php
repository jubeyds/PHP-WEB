<?php ob_start(); ?>


<h3>Je suis dans la page traitement</h3>

<?php
    $nom = $_POST['name'];
    $email = $_POST['email'];

    if (isset($_POST['Envoyer'])) {
        $nom = $_POST['name'];
        echo "Le nom est : " . $nom . "\n";
    }else {
        echo "Veuillez remplir le formulaire";
    }

    
    echo "L'email est : " . $email . "\n";
?>


<?php
$content = ob_get_clean();
require 'template.php';
?>