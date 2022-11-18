<!-- Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci : -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 07</title>
</head>
<body>
    <form action="" method="get">
        <label for="largeur">Veuillez entrer la largeur : </label>
        <input type="number" name ="largeur" id="largeur">
        
        <label for="hauteur">Veuilez entrer la hauteur : </label>
        <input type="number" name="hauteur" id="hauteur">

        <button type="submit">Envoyer</button>
    </form>
<pre>
    <?php
        $l = (int)$_GET["largeur"];
        $h = (int)$_GET["hauteur"];
        $e = "&nbsp";
        $x = 1;

echo "$l $h <br>";

       for($colonnesg = $h; $colonnesg > 0; $colonnesg--){
                for($espacesg = $colonnesg; $espacesg > 0; $espacesg--){
                     echo $e;
                }
                echo "/";
                
                for($colonnesd = 0; $colonnesd < ($h - $colonnesg)*2; $colonnesd++){
                    echo "_";
                }
                echo "\\<br>";
        }     
// premiere boucle avec variable $colonnesg qui va me faire autant de saut à 
// la ligne que ma valeur en hauteur. Dans cette boucle on a une deuxieme 
//boucle avec la variable $espacesg qui me permet de faire les espaces                   

        while($x <= $h){
            if($x < $h){
                echo " |";
                for($espacec = 1; $espacec < $l ; $espacec++){
                    echo $e;
                }
                echo "| <br>";
            }
            elseif($x == $h){
                echo " |";
                for($sol = 1; $sol < $l; $sol++){
                    echo "_";
                }
                echo "|";
            }
            $x++;
        }

    ?>
    </pre>
</body> 
</html>