<!-- Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method ="get">

        <label for="str">Taper votre texte ici</label>
        <input type ="text" name="str">

        <label for="fonction">Choisir une fonction</label>
        <select name ="fonction">
            <option>--</option>
            <option>Gras</option>
            <option>Cesar</option>
            <option>Plateforme</option>
        </select>

        <input type="submit">
    </form>

    <?php

    function mySplit($str){

    }
    
    function gras($words){
        $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";       
        for($i= 0 ; isset($words[$i]); $i++ ){
            for($h = 0; isset($maj[$h]); $h++){
                if($words[$i][0] == $maj[$h]) 
                    echo "<b>";
            }
            echo $words[$i];
            echo "</b> ";
        }
    }

    function cesar($str){
        $min = "abcdefghijklmnopqrstuvwxyz";
        for($i = 0; isset($str[$i]); $i++){
            for ($h = 0; isset($min[$h]); $h++){
                if($min[$h] == $str[$i]){
                    $str[$i] = $min[($h + 2) % 26];
                    break;
                }
            }
        }
        return $str;
    }

    function nombre_lettres($word){
        $count = 0;
        for($x = 0; isset($word[$x]); $x++){
            $count++;
        }
        return $count;
    }

    function plateforme($words){
        for($x = 0; isset($words[$x]); $x++){
            if($words[$x][nombre_lettres($words[$x])- 2] == "m" 
            && $words[$x][nombre_lettres($words[$x])- 1] == "e"){
                echo $words[$x] . "_ ";
            } else{
                echo $words[$x] . " ";
            }   
        }
        return $words;
    }

    $str = $_GET["str"];
    $words = explode(" ", $str);
   
    if($_GET["fonction"] == "Gras"){
        gras($words);
    } elseif($_GET["fonction"] == "Cesar"){
        echo cesar($str);
    } elseif($_GET["fonction"] == "Plateforme"){
     plateforme($words);
    }

    ?>
    
</body>
</html>