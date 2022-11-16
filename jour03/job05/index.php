<!-- Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”.. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dico = [
    "voyelles" => "AaEeIiOoUuYy",
    "consonnes" => "BbCcDdFfGgHhJjKkLlMmNnPpQqRrSsTtVvXxZz",
];

$v = 0;
$c = 0;

for($x = 0; isset($str[$x]); $x++){
    for($i = 0; isset($dico["voyelles"][$i]); $i++){
        if($str[$x] == $dico["voyelles"][$i]){
            $v++;
        }
    }
    for($i = 0; isset($dico["consonnes"][$i]); $i++){
        if($str[$x] == $dico["consonnes"][$i]){
            $c++;
        }
    }
}

?>

<table border = 3>
    <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </tr>
    <tr>
        <td><?php echo $v ?></td>
        <td><?php echo $c ?></td>
    </tr>
</table>
    
</body>
</html>