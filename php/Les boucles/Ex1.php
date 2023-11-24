<?php
echo "Entrez un numero";
$nbr=fgets(STDIN);
$somme=0;
while ($nbr >= 0) {
$somme = $somme+$nbr;
echo "Entrez un autre numero";
$nbr=fgets(STDIN);
}
echo "Vous avez insere un numero negatif. La somme totale est" . $somme = $somme+$nbr;
?>