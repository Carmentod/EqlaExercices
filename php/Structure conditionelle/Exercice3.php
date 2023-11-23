<?php
echo "Inserez le numero souhaite.";
$nbr=fgets(STDIN);
if(is_numeric($nbr))
{if ($nbr > 0) {
    echo "C'est un numero positif";
} elseif ($nbr < 0) {
    echo "C'est un numero negatif.";
}
else{
    echo "=0";}
}
else {
    echo "Rentrez un numero";
}
?>