<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="style.css">
    <?php
        if($_GET["style"] == "Style 1"  ){
            echo '<link rel ="stylesheet" href="style1.css">';
        } elseif($_GET["style"] == "Style 2"  ){
                echo '<link rel ="stylesheet" href="style2.css">';
        } elseif($_GET["style"] == "Style 3"  ){
                echo '<link rel ="stylesheet" href="style3.css">';
        }
    ?>
    <title>Job05</title>
</head>
<body>
    <form method="get" id="formulaire">

        <label for ="prenom">Prénom : </label>
        <input type="text" id="prenom" name="prenom">

        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom">

        <label for="style">Choisissez un style : </label>
        <select id ="choix" name="style">
            <option>--</option>
	        <option id ="option1">Style 1</option>
	        <option id ="option2">Style 2</option>
	        <option id ="option3">Style 3</option>
        </select>

        <button type="submit" id ="bouton">Envoyer</button>  
               
    </form>
</body>
</html>