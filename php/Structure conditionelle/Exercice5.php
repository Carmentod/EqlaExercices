<?php
echo "Saisissez un jour de la semaine en utilisant un nombre (par exemple, 1 pour lundi, 2 pour mardi, etc.).";
$jour=fgets(STDIN);
switch ($jour) {
case "1":
echo "Lundi";
break;
case "2":
echo "Mardi";
break;
case "3":
echo "Mercredi";
break;
case "4":
echo "Jeudi";
break;
case "5":
echo "Vendredi";
break;
case "6":
echo "Samedi";
break;
case "7":
echo "Dimanche";
break;
    default:
        echo "Ce numero ne correspond pas au aucun jour de la semaine";
}
?>