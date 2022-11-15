<!-- Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”). -->

<?php

/* 1ère méthode

function nbDiv($number){
    $count = 0 ;
    for ($i = 2 ; $i < $number; $i++) {
        if (is_int($number / $i)) {
            $count++;
        }       
    }
    return $count;
}

while ($x <= 1000){
    if (nbDiv($x) == 0) {
        echo "$x <br>";
    } else {
        echo "";
    }
$x++;
}

                     ------------------------------------
2ème méthode
*/

while ($x <= 1000){
    $count = 1;
    for ($i = 2 ; $i < $x ; $i++){
        if ($x % $i == 0){
            $count++;
        }else {
            $count = $count;
        }
    }
    if ($count == 1){
        echo "$x <br>";
    }
    $count = 1;
$x++;
}

?>