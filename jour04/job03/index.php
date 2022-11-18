<!-- Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument POST envoyé est : “ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="nom" id="nom" placeholder="Nom">
        <input type="text" name="prenom" id="prenom" placeholder="Prénom">
        <input type="text" name="email" id="email" placeholder="Email">
        <label for ="naissance">Date de naissance:</label>
        <input type="date" name="naissance" id="naissance">
        <input type="submit" value="Envoyer">
    </form>

<?php

  $count = 0;

foreach($_POST as $key => $value){
    if(isset($_POST[$key])){
        $count++;
    }
}

echo "<br> Le nombre d’arguments POST envoyés est : $count"

?>

</body>
</html>