<!-- Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
(“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
● Si le nombre est un multiple de 3, affichez “Fizz”.
● Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”. -->

<?php

$i = 1;

while ($i <= 100){

if ($i % 3 == 0 and $i % 5 == 0) {
    echo "FizzBuzz<br>";
} elseif ($i % 3 == 0) {
    echo "Fizz<br>";
} elseif ($i % 5 == 0) {
    echo "Buzz<br>";
} else {
    echo "$i<br>";
}
$i++;
}