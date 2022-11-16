<!-- Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa -->

<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = ["a", "A", "e", "E", "i", "I", "o", "O", "u", "U", "y", "Y"];

for($lettre = 0; isset($str[$lettre]); $lettre++){
    for($voy = 0; isset($voyelles[$voy]); $voy++){
        if($voyelles[$voy] == $str[$lettre]){
            echo $voyelles[$voy];
        }
    }
}

?>