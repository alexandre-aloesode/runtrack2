<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->

<?php

$mysqli = new mysqli('localhost', 'root','', 'jour09');

$request = $mysqli->query('SELECT * FROM etudiants WHERE naissance > "2004-12-31"');

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