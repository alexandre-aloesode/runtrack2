<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez le prenom, le nom et la date de naissance des étudiants de sexe
féminin. Affichez le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->

<?php

$mysqli = new mysqli('localhost', 'root','', 'jour09');

$request = $mysqli->query('SELECT prenom AS Prénom, nom AS Nom, naissance AS Naissance  FROM etudiants WHERE sexe=\'Femme\';');

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