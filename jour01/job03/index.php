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
$type = [ "Boolean", "Entier", "String", "Nombre"];
$nom = [ "var1", "var2", "var3", "var4"];
$valeur = [ "true", "4", "abcdefg", "999"];
?>

    <table border ="3">
        <tbody>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td> <?php echo $type[0] ?></td>
                <td> <?php echo $nom[0] ?></td>
                <td> <?php echo $valeur[0] ?></td>
            </tr>
            <tr>
                <td> <?php echo $type[1] ?></td>
                <td> <?php echo $nom[1] ?></td>
                <td> <?php echo $valeur[1] ?></td>
            </tr>
            <tr>
                <td> <?php echo $type[2] ?></td>
                <td> <?php echo $nom[2] ?></td>
                <td> <?php echo $valeur[2] ?></td>
            </tr>
            <tr>
                <td> <?php echo $type[3] ?></td>
                <td> <?php echo $nom[3] ?></td>
                <td> <?php echo $valeur[3] ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>
