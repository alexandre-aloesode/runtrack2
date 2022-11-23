<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->

<html>

    <form method="get">
        <input type="text" name="prenom" placeholder="Prénom">
        <button type="submit">Envoyer</button>
        <input type="submit" name="reset" value="Reset">
    </form>

<?php

session_start();

if(isset($_GET["prenom"]) && !isset($_GET["reset"])){
    $_SESSION["users"][] = $_GET["prenom"];    
    foreach($_SESSION["users"] as $key => $value){
    echo "<ul>";
    echo "<li>" . $value . "</li>";
    echo "</ul>";
    }
}

if(isset($_GET['reset']) ){
session_destroy();
}

?>

</html>