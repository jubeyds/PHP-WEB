<?php


// Ecrire un programme qui converti un nombre en chiffres romains.


$nombre = $_POST['number'];


function convertir($nombre){

$resultat = "";
while ($nombre > 0) {
    switch (true) {
        case ($nombre >= 1000):
            $resultat .= "M";
            $nombre -= 1000;
            break;
        case ($nombre >= 900):
            $resultat .= "CM";
            $nombre -= 900;
            break;
        case ($nombre >= 500):
            $resultat .= "D";
            $nombre -= 500;
            break;
        case ($nombre >= 400):
            $resultat .= "CD";
            $nombre -= 400;
            break;
        case ($nombre >= 100):
            $resultat .= "C";
            $nombre -= 100;
            break;
        case ($nombre >= 90):
            $resultat .= "XC";
            $nombre -= 90;
            break;
        case ($nombre >= 50):
            $resultat .= "L";
            $nombre -= 50;
            break;
        case ($nombre >= 40):
            $resultat .= "XL";
            $nombre -= 40;
            break;
        case ($nombre >= 10):
            $resultat .= "X";
            $nombre -= 10;
            break;
        case ($nombre >= 9):
            $resultat .= "IX";
            $nombre -= 9;
            break;
        case ($nombre >= 5):
            $resultat .= "V";
            $nombre -= 5;
            break;
        case ($nombre >= 4):
            $resultat .= "IV";
            $nombre -= 4;
            break;
        case ($nombre >= 1):
            $resultat .= "I";
            $nombre -= 1;
            break;
    }
}

 return $resultat;   
}






?>




