<?php
echo "Inserez une note entre 0 et 100.";
$nbr=fgets(STDIN);
switch ($nbr) {
case "$nbr >= 90": {
    echo "C'est tres bien";
case "$nbr < 90 && $nbr >= 80":
    echo "C'est bien";
case "$nbr < 80 && $nbr >= 70":
    echo "C'est satisfaisant";
default:
    echo "C'est a ameliorer!";
}
?>