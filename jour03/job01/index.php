<!-- Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
comprises dans ce tableau. -->

<?php

$table = [200, 204, 173, 98, 171, 404, 459];

foreach($table as $number => $value){
    if($value % 2 == 0){
        echo "$value est pair<br>";
    } else
        echo "$value est impair<br>";
}

?>