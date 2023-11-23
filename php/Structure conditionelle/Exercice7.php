<?php
echo "Saisissez un numero a votre choix.";
$nbr1=fgets(STDIN);
echo "Tapez un deuxieme numero";
$nbr2=fgets(STDIN);
if(is_numeric($nbr1) && is_numeric($nbr2)) {
if ($nbr1 % $nbr2 == 0) {
echo "Votre premier numero est divisible par le deuxieme";
}
else {
    echo "Le deuxieme numero ne divide pas le premier";
}}
else {
    echo "Vous devez inserer un numero";
}
?>