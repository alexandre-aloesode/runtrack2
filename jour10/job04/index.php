<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants dont prenom commence par
un “T”. Affichez le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->

<?php

$mysqli = new mysqli('localhost', 'root','', 'jour09');

$request = $mysqli->query('select * from etudiants where prenom LIKE "T%"');

$result = $request->fetch_array(MYSQLI_ASSOC);

?>

<html>
    <table border="3">
        <thead>
            <?php
                foreach($result as $key => $value){
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