<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>
<body>
    <form action="" method ="get">
        <label for="number" >Veuillez entrer un nombre : </label>
        <input type="text" name="number" id="number">
        <button type="submit">Envoyer</button>
    </form>

    <?php
        if($_GET["number"] % 2 == 0){
            echo "Votre nombre est pair";
        } else {
            echo "Votre nombre est impair";
        }
    ?>
</body>
</html>