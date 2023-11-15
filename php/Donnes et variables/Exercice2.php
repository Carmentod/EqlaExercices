<?php
/* START
INT annee;
INT age;
PRINT "Quel est votre annee de naissance?";
read annee;
age=2023-annee;
PRINT "Vous avez", age, "ans"; END */

echo "Quel est votre annee de naissance?";
$year= fgets(STDIN);
    $age=(2023-$year);
    echo "Vous avez", $age, "ans.";
?>
