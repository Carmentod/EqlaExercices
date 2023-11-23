<?php
echo "Saisissez un numero a votre choix.";
$nbr1=fgets(STDIN);
echo "Tapez un deuxieme numero";
$nbr2=fgets(STDIN);
echo "Saisissez le troisieme numero";
$nbr3=fgets(STDIN);
if (is_numeric($nbr1) && is_numeric($nbr2) && is_numeric($nbr3)) {
if ($nbr1 >= $nbr2 && $nbr1 >= $nbr3) {
    echo $nbr1, "est le plus grand numero que vous avez saisi!";
}
if ($nbr2 >= $nbr1 && $nbr2 >= $nbr3) {
    echo $nbr2, "est le plus grand numero que vous avez saisi!";
}
if ($nbr3 >= $nbr2 && $nbr3 >= $nbr1) {
    echo $nbr3, "est le plus grand numero que vous avez saisi!";
}}
?>