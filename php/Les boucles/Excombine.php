<?php

$min = 1 ;
$max = 100 ;

do {
    $nbr = readline("Choisissez un nombre entre 1, 2 et 3 \n- Tapez 1 pour jouer. \n- Tapez 2 pour option. \n- Tapez 3 pour quitter.");
    if ($nbr != 1 && $nbr != 2 && $nbr != 3) {
        echo "Il faut choisir un numero entre 1 et 3";
        continue;
    } elseif ($nbr == 3) {
        echo "Vous avez quitte le jeu.";
        break;
    } elseif ($nbr == 2) {
        $option = readline("Tapez a pour modifier la borne minimum. Tapez b pour modifier la borne maximum. Tapez c pour modifier les deux bornes. Tapez q pour revenir au menu principale");

        if ($option == "q") {
            continue;
        }

        do {
            if ($option == "a") {
                $min = readline("\nEntrez la valeur de la borne minimum : ");
            } elseif ($option == "b") {
                $max = readline("\nEntrez la valeur de la borne maximum : ");
            } elseif ($option == "c") {
                $min = readline("\nEntrez la valeur de la borne minimum : ");
                $max = readline("\nEntrez la valeur de la borne maximum : ");
            }
            if ($min >= $max) {
                echo "Erreur, la borne minimum ne peut pas être supérieur ou égal à la bore maximum. Veuillez réessayez.";
                // continue ;
            }
        } while ($min >= $max);
    } elseif ($nbr == 1) {
        $nbrRand = rand($min, $max);
        $compteur = 0;
        do {
            echo "Tapez un nombre entre" . $min . "et" . $max;
            $ask = trim(fgets(STDIN));
            $compteur++;
            if ($ask > $max && $ask < $min) {
                echo "Le numero doit etre entre 1 et 100";
                continue;
            }
            if ($ask == "q") {
                echo "vous quitez le jeu!\n";
                break;
            }
            if ($ask == $nbrRand) {
                echo "Bravo! Vous avez trouve la bonne reponse apres" . $compteur . "tentatives!";
                break;
            }
            if ($ask < $min) {
                echo "Choisissez un numero plus grand que" . $min;
            }
            elseif ($ask < $nbrRand) {
                echo "Votre numero est trop petit!";
            }
            elseif ($ask <= $max) {
                echo "Votre numero est trop grand!";
            }
            else {
                echo "Veillez choisir un numero entre" . $min . "et" . $max;
            }
        }
        while (true);
    }
}
while ($nbr != 3);
?>