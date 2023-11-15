<?php
echo "Inserez le numero souhaite.";
$nbr=fgets(STDIN);
if ($nbr > 0) {
    echo "C'est un numero positif";
} elseif ($nbr < 0) {
    echo "C'est un numero negatif.";
}
else{
    echo "=0";
}
?>