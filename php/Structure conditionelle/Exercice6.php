<?php
echo "Saisissez un mois de l'annee en utilisant un nombre (par exemple, 1 pour janvier, 2 pour fevrier, etc.).";
$mois=(fgets(STDIN));
if (is_numeric($mois)) {
    $mois=intVal($mois);
    switch ($mois%12) {
    case 1:
        echo "Janvier a 31 jours";
        break;
    case 2:
        echo "Fevrier a 28 jours ou 29 pendant les annees bisextiles";
        break;
    case 3:
        echo "Mars a 31 jours";
        break;
    case 4:
        echo "Avril a 30 jours";
        break;
    case 5:
        echo "Mai a 31 jours";
        break;
    case 6:
        echo "Juin a 30 jours";
        break;
    case 7:
        echo "Juillet a 31 jours";
        break;
    case 8:
        echo "Aout a 31 jours";
        break;
    case 9:
        echo "September a 30 jours";
        break;
    case 10:
        echo "Octobre a 31 jours";
        break;
    case 11:
        echo "Novembre a 30 jours";
        break;
    case 0:
        echo "Decembre a 31 jours et c'est le dernier mois de l'annee.";
        break;
}
}
else {
    echo "Ceci n'est pas un numero";
}
?>