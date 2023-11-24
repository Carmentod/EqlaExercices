<?php
$nbraleatoir=rand(1, 100);
$compteur=0;
do {
    echo "Tapez un nombre entre 1 et 100";
    $nbr=fgets(STDIN);
    $compteur ++;
}
/*if ($nbr > 100) {
    echo "Le numero depasse 100";
}*/
while ($nbr!=$nbraleatoir);
echo "Vous avez trouve la bonne reponse apres" . $compteur . "tentatives.";
?>