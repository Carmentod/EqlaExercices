<?php
echo "Inserez le numero souhaite.";
$nbr=fgets(STDIN);
switch ($nbr) {
    case "$nbr >= 1":
        echo "VOus avez choisi un numero positif";
        break;
    case "0":
        echo "Vous avez choisi un numero neutre";
        break;
    default:
            echo "Votre choix est u numero negatif";
}

?>