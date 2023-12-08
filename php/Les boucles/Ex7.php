<?php
$compteur=0;
echo "Introduissez votre mot de passe";
while (true) {
    $compteur++;
$mp=trim(fgets(STDIN));
$mptrue="Admin";
if ($mp == $mptrue) {
    echo "Le mot de passe est correct";
    break;
}
    elseif ($compteur < 3) {
        echo "Veillez introduire un mot de passe correct!";
    }
else {
    echo "Votre mot de passe a ete introduit eronee trois fois. Veillez attendre 15 minutes avant de resayer.";
    break;
}
}

?>