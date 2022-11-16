<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li. -->

<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

       for($x = 0; isset($str[$x]); $x+=2){
            echo $str[$x];
       }

?>