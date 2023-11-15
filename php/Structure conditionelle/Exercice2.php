<?php
echo "Quel est votre age?";
$nbr=fgets(STDIN);
if ($nbr >= 18) {
    echo "Vous etes majeur.";
}
?>