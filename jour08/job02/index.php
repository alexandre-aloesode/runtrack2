<?php
// Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
// Afficher le contenu du cookie.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.

    if(!isset($_COOKIE['nbvisites'])){
        echo "Bienvenue, c'est votre première fois sur cette page !";
        $count = 1;
        setcookie('nbvisites', $count);
//  Ici on n'attribue que 2 valeur au cookie mais on peut donner toutes les suivantes, séparées d'une virgule:
//   Nom du cookie, valeur de départ, durée du cookie, chemin du cookie (rarement utilisé),
//  nom de domaine sur lequel domaine est appliqué, param sécurité pour dire si cookie doit 
//  etre sécu avec https (true si on le veut), accès au cookie ne se fera que en http 
//  si on met true
    } else {
        $count = $_COOKIE['nbvisites'] + 1;
        setcookie('nbvisites', $count);  
    }

    if(isset($_GET["reset"])){
        $count = 1;
        setcookie('nbvisites', $count);
        header('location: '. 'index.php');
    }

    echo "Nombre de visites : ". $_COOKIE['nbvisites'] . "<br><br>";

?>

<!DOCTYPE html>
<html>

<form method="get">
<button type="submit" name="reset">Reset</button>
</form>

</html>