<!-- Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre.
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 
25 et 50 : souligner.
Afficher “La Plateforme_” à la place de 42. -->

<?php

for ($i = 0; $i <= 100; $i++){
    if($i <= 20){
        echo "<i>$i</i><br>";
    } elseif($i == 42){
        echo "La Plateforme<br>";
    } elseif($i >= 25 and $i <= 50) {
        echo "<u>$i</u><br>";
    } else {
        echo "$i<br>";
    }
}

?>