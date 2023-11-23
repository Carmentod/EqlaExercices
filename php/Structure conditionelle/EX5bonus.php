<?php
/*Amir, Philippo, Nabil et Karim sont 4 frères. ils veulent acheter un jeu chacun pour Noel. Comme ils n'ont pas le même âge. Ils ne peuvent pas jouer aux même jeux.
Faire un code qui demande l'âge et qui propose différent jeux selon celui-ci ?
ex: 18 ans Call Of Duty; 16 Hogwards Legacy; 12 Fortnite, le reste Animal Crossing.*/

echo "Bonjour mon ami, quel age as tu?";
$age=fgets(STDIN);
if ($age >= 18) {
    echo "Je vous propose d'acheter le jeu Call Of Duty";
}
elseif ($age > 16) {
    echo "Vous pourriez acheter le jeu Hogwards Legacy";
}
elseif ($age >= 12) {
    echo "Tu peux jouer avec Fortnite";
}
else {
    echo "Le jeu recommande pour toi est Animal Crossing";
}
?>