<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c -->

<?php

// On commence par une fonction qui va venir remplacer le nouveau premier caractère par une majuscule
function maj($string){
    $MINS = "abcdefghijklmnopqrstuvwxyz";
    $MAJS = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($m = 0; isset($MINS[$m]); $m++){
        if($MINS[$m] == $string[0]){
            $string[0] = $MAJS[$m];
        }
    }
    return $string;
}

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$l = 1; 
// la variable l permet de savoir de combien de caractères décaler le texte. On a juste à la changer pour augmenter le décalage

for($x = 0; isset($str[$x]); $x++){
    $var1 = $var1 . $str[$x+$l];      
}
for($y = 0; $y < $l; $y++){
    $var2 = $var2 . $str[$y];
}

$str2 = $var1 . $var2;

$str3 = maj($str2);

echo $str3;

?>