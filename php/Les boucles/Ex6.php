<?php
echo "Introduissez le numero pour le quel vous voullez obtenir la factorielle";
$nbr=trim(fgets(STDIN));
$f = 1;
for ($i = 1; $i <= $nbr; $i++) {
    $f=$f*$i;
}
echo "La factorielle de" . $nbr . "est" . $f;
?>