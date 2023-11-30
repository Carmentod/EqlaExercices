<?php
echo "Introduissez le numero que vous voullez multiplier";
$nbr=trim(fgets(STDIN));
echo "La table de multiplication de" . $nbr . "est";
for ($i = 1; $i <= 10; $i++ ) {
 echo $nbr*$i . "\n";
}
?>