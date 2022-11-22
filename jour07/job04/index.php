<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération. -->

<?php

function calcule($arg1,$arg2,$arg3){
    $a = $arg1;
    $b = $arg3;
    $operation = $arg2;
    if ($operation == "+"){
        return($a+$b);
    } elseif($operation == "-"){
        return ($a-$b);
    } elseif($operation == "*"){
        return($a*$b);
    } elseif($operation =="/"){
        return($a/$b);
    } elseif($operation =="%"){
        return($a%$b);
    }
    }


echo calcule(3, "*", 6);

?>