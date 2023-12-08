<?php

$min = 0 ;
$max = 100 ;

do {
    $nbr = readline("Choisissez un nombre entre 1, 2 et 3 \n- Tapez 1 pour jouer. \n- Tapez 2 pour option. \n- Tapez 3 pour quitter.") ;

    if ($nbr!=1 && $nbr!=2 && $nbr!=3) {
        echo "Il faut choisir un numero entre 1 et 3";
        continue ;
    }
    elseif ($nbr==3) {
        echo "Vous avez quittez le jeu." ;
        break ;
    }
    elseif ($nbr==2)
    do 
    {
        $min = readline("\nEntrez la valeur de la borne minimum : ") ;
        $max = readline("\nEntrez la valeur de la borne maximum : ") ;
        
        if ($min>=$max) 
        {
            echo "Erreur, la borne minimum ne peut pas être supérieur ou égal à la bore maximum. Veuillez réessayez." ;
            // continue ;
        }
        while ($min>=$max)
    }


}
while ($nbr!=3)

$nbrRand = rand($min, $max);
    $compteur=0;
    do {
        echo "Tapez un nombre entre " . $min . " et " . $max ;
        $nbr = fgets(STDIN);
        $compteur ++;
        if ($nbr > $max && $nbr < $min) {
            echo "Le numero doit être entre " . $min . " et " . $max ;
        }
    }
while ($nbr!=$nbrRand);
echo "Vous avez trouve la bonne reponse apres" . $compteur . "tentatives.";

?>