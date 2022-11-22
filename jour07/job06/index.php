<!-- Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php

$str = "Généralement les professeurs de français recommandent à leurs élèves de ne pas faire de phrases trop longues. 
Victor Hugo ou Marcel Proust n’ont pas vraiment respecté ce principe. Chez Proust, les phrases comptent en moyenne 43 mots 
contre une vingtaine en moyenne chez les écrivains de langue française.";

function leetSpeak($str){
    for($i = 0; isset($str[$i]); $i++){
        if ($str[$i] == "a" || $str[$i] == "A"){
            $str[$i] = "4";
        }
        elseif ($str[$i] == "b" || $str[$i] == "B"){
            $str[$i] = "8";
        }
        elseif ($str[$i] == "e" || $str[$i] == "E" || $str[$i] == "é" || $str[$i] == "è"){
            $str[$i] = "3";
        }
        elseif ($str[$i] == "g" || $str[$i] == "G"){
            $str[$i] = "6";
        }
        elseif ($str[$i] == "l" || $str[$i] == "L"){
            $str[$i] = "1";
        }
        elseif ($str[$i] == "s" || $str[$i] == "S"){
            $str[$i] = "5";
        }
        elseif ($str[$i] == "t" || $str[$i] == "T"){
            $str[$i] = "7";
        }
    }
    return $str;
}

echo leetSpeak($str);

?>