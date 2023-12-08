<?php
$totaleleves=0;
$compteur=0;
echo "Introduissez vos notes!";
while (true) {
    $nbr=trim(fgets(STDIN));
    if ($nbr <=-1) {
        echo "VOus avez insere une note negative!";
        break;
    }
        if ($nbr >= 21) {
            echo "Veillez inserer une note entre 1 et 20.";
            continue;
    }
    $compteur++;
    $totaleleves=$totaleleves+$nbr;
    echo "Introduissez une autre note";
}
echo "La moyen vaux". $totaleleves/$compteur;

?>