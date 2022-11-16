<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne. -->

<?php

$str = "Dans l'espace, personne ne vous entend crier";

$count = 0;

for($x = 0; isset($str[$x]); $x++){
        $count++;
    }
    
echo "Ce texte comprend $count caractères";

?>

