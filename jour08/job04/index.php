<!-- Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion. -->

<html>

<?php

 if(!isset($_COOKIE['users']) || isset($_GET["deco"])) {
    echo '<form method="get">
           <input type="text" name="prenom" placeholder="Prénom">
           <button type="submit">Connexion</button>
          </form>';    
}

else {
    echo 'Bienvenue ' . $_COOKIE['users'] . '! <br>' ;
    echo '<form method="get">
          <button type="submit" name="deco">Déconnexion</buttton>
          </form>';
}

if(isset($_GET['prenom'])){
        $name = $_GET["prenom"];
        setcookie('users', $name);
        header("Location: index.php");
    }
?>

</html>