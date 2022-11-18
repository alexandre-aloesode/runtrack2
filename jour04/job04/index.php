<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :
ArgumentValeur
prenomStephane
nomDupont -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
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

<table border=3>
    <thead>
        <th>Argument</th>
        <th>Valeur</th>
    </thead>
    <tbody>
        <?php 
            foreach($_POST as $key => $value){
                if(isset($_POST[$key])){
                 echo "<tr><td>$key</td> <td>$value</td></tr>";     
                }
            }
        ?>
    </tbody>
</table>

</body>
</html>