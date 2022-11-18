<!-- Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>

    <form action="" method="get">
        <input type="text" name="nom" id="nom" placeholder="Nom">
        <input type="text" name="prenom" id="prenom" placeholder="Prénom">
        <input type="text" name="email" id="email" placeholder="Email">
        <label for ="naissance">Date de naissance:</label>
        <input type="date" name="naissance" id="naissance">
        <input type="submit" value="Envoyer">
    </form>

<?php

  $count = 0;

foreach($_GET as $key => $value){
    if(isset($_GET[$key])){
        $count++;
    }
}

echo "<br> Le nombre d’arguments GET envoyés est : $count"

?>

</body>
</html>