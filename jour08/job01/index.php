<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<html>

<?php

session_start();


if(isset($_SESSION['nbvisites'])){
    echo "Nombre de visites: ".$_SESSION['nbvisites']. "<br><br>";
} else {
    $_SESSION["nbvisites"] = 0;
}

$_SESSION['nbvisites'] += 1;

if(isset($_GET["reset"])){
    $_SESSION["nbvisites"] = 0;
    header('location: '. 'index.php');
}

?>

<form method="get">
<button type="submit" name="reset">Reset</button>
</form>

</html>