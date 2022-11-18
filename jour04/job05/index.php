<!-- Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>
<body>
    <form action ="" method="post"> Page de connexion<br>
<!-- On choisit ici la méthode post car elle permet de ne pas afficher les 
informations rentrées dans l'URL. Pour un formulaire de connexion cest donc 
plus sécurisé. -->
        <label for=username>Pseudo : </label>
        <input type ="text" name ="username" id ="username">

        <label for="mdp">Mot de passe :</label>
        <input type ="password" name="mdp" id="mdp">

        <input type="submit" value="Envoyer">
    </form>

    <?php
    
    if($_POST["username"] == "John" and $_POST["mdp"] == "Rambo"){
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
       
    ?>
    
</body>
</html>