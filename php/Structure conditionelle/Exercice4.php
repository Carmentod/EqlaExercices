<?php
echo "Inserez une note entre 0 et 100.";
$nbr=fgets(STDIN);
if ($nbr > 100 || $nbr < 0) {
    echo "Inserez une note entre 0 et 100";
}
elseif ($nbr >= 90) {
    echo "C'est tres bien";
}
elseif ($nbr >= 80) {
    echo "C'est bien";
}
 elseif ($nbr >= 70) {
    echo "C'est satisfaisant";
}
else{
    echo "C'est a ameliorer!";
}
?>