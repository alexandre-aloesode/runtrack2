<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données. -->

<!-- méthode avec fetch_array -->

<?php

$mysqli = new mysqli('localhost', 'root','', 'jour09');

$request = $mysqli->query('select prenom, nom, naissance, sexe, email from etudiants');

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


<!-- méthode avec fetch_all -->

<?php

echo '<br>';

$mysqli = new mysqli('localhost', 'root','', 'jour09');

$request = $mysqli->query('select * from etudiants');

$result = $request->fetch_all();

?>

<html>
    <table border="3">
        <thead>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
                for($i = 0; isset($result[$i]); $i++){
                    echo '<tr>';
                    for($x =1; isset($result[$i][$x]); $x++){
                        echo '<td>' . $result[$i][$x] . '</td>';
                    }
                    echo '</tr>';
                }
            ?>

        </tbody>
    </table>
</html>
