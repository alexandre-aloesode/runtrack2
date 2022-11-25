<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez le prénom, le nom et la date de naissance des étudiants qui sont nés
entre 1998 et 2018. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données. -->

<?php

$mysqli = new mysqli('localhost', 'root','', 'jour09');

$request = $mysqli->query('SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN "1998-01-01" AND "2018-01-01"');

?>

<html>
    <table border="3">
        <thead>
            <?php
                foreach($result = $request->fetch_array(MYSQLI_ASSOC) as $key => $value){
                    echo '<th>' . $key . '</th>';
                }
            ?>
        </thead>
        <tbody>
            <?php
            while($result !=null){
                echo '<tr>';
                foreach($result as $value){
                    echo '<td>' . $value . '</td>';
                }
                $result = $request->fetch_array(MYSQLI_ASSOC);
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</html>