<?php
/*Écrivez un script PHP qui utilise une boucle do... while pour afficher un menu de sélection avec des options numérotées (par exemple, 1. Afficher, 2. Ajouter, 3. Quitter). Demandez à l'utilisateur de sélectionner une option. La boucle doit continuer tant que l'utilisateur ne choisit pas l'option "Quitter".*/
do {
    echo "Selectionez 1 pour aficher, 2 pour ajouter ou 3 pour quiter";
    $nbr = fgets(STDIN);
    if ($nbr!=1 && $nbr!=2 && $nbr!=3) {
        echo "Il faut choisir un numero entre 1 et 3";
    }
}
while ($nbr!=3)
?>