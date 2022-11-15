<!-- Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />). -->

<?php

for ($i = 0; $i <= 1337; $i++){
    if ($i == 26 or $i == 37 or $i == 88 or $i == 1111) {
        echo "<br>";
    } else {
        echo "$i<br>";
    }
}

?>