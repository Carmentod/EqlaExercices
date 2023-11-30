<?php
echo "Introduissez le numero pour le quel vous voullez obtenir la factorielle";
$nbr=trim(fgets(STDIN));
$f = 1;
$i=1;
while ($i <= $nbr) {
$f=$f*$i;
$i++;
}
echo "La factorielle de" . $nbr . "est" . $f;
?>