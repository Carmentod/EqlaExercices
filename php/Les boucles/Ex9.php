<?php
echo "Les numeros impaires entre 1 et 20 sont:";
for ($i=1; $i < 20; $i++) {
    if ($i%2==0) {
        continue;
    }
Echo $i . "\n";
}

?>