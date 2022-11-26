<!-- Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
colonnes représentant la grille. Au début de la partie, chacune des cases contient un
bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et 
réinitialisez la partie. 
Un bouton “réinitialiser la partie” présent en dessous de la grille
permet également de réinitialiser la partie à tout moment. -->



<?php
    session_start();

    function check_win($a){
        for($x = 0; $x < 3; $x++){
            if ($a[$x][0] == 'X' && $a[$x][1] == 'X' && $a[$x][2] == 'X'){
                return true;

            } elseif ($a[$x][0] == 'O' && $a[$x][1] == 'O' && $a[$x][2] == 'O'){
                return true;
            }   
        }
        for($x = 0; $x < 3; $x++){
            if ($a[0][$x] == 'X' && $a[1][$x] == 'X' && $a[2][$x] == 'X'){
                return true;
            } elseif ($a[0][$x] == 'O' && $a[1][$x] == 'O' && $a[2][$x] == 'O'){
            return true;
            }   
        }
        if ($a[0][0] == 'X' && $a[1][1] == 'X' && $a[2][2] == 'X'){
            return true;
        } elseif ($a[0][2] == 'X' && $a[1][1] == 'X' && $a[2][0] == 'X'){
            return true;
        } elseif ($a[0][0] == 'O' && $a[1][1] == 'O' && $a[2][2] == 'O'){
            return true;
        } elseif ($a[0][2] == 'O' && $a[1][1] == 'O' && $a[2][0] == 'O'){
            return true;
        }
    }

    if(!isset($_SESSION['morpion'])){
        $_SESSION['morpion']= [
            ['-', '-', '-'],
            ['-', '-', '-'],
            ['-', '-', '-']
        ];
        $_SESSION['player'] = 0;
    }

    $_SESSION['player'] ++;

    if($_SESSION['player'] % 2 == 0){
        $player = 'X';
    } else {
        $player = 'O';
    }

    if(isset($_GET['case'])){
        if(check_win($_SESSION['morpion']) == true || $_SESSION['player'] > 10 ){
            echo 'La partie est finie ! ';
            $_SESSION['player'] --;
        }elseif($_SESSION['morpion'][$_GET['case'][0]][$_GET['case'][2]] == 'X' ||
        $_SESSION['morpion'][$_GET['case'][0]][$_GET['case'][2]] == 'O'){
            echo 'Case déjà jouée !';
            $_SESSION['player'] --;
        } else {
        $_SESSION['morpion'][$_GET['case'][0]][$_GET['case'][2]] = $player; 
        }
    }
    
    check_win($_SESSION['morpion']);
    if(check_win($_SESSION['morpion']) == true){
        echo '<h2>' . $player . ' a gagné !</h2>';
    }

    if($_SESSION['player'] == 10 && check_win($_SESSION['morpion']) == false){
        echo '<h2> Match nul !</h2>';
    }

    if(isset($_GET['reset'])){
        session_destroy();
        header('Location: index.php');
    }

    ?>

    <table>
        <form method='get'>
            <?php
                for($lignes = 0; $lignes < 3; $lignes++){
                    echo '<tr>';
                    for($col = 0; $col < 3; $col++){
                        echo '<td> <button type="submit" name="case" value=' . $lignes . 
                        '-' . $col . '>' . $_SESSION['morpion'][$lignes][$col] . '</button></td>';
                    }
                    echo '</tr>';
                }
            ?>
        </form>
    </table>


<form method='get'>
    <button type='submit' name='reset' id='reset'>Rejouer</button>
</form>

<style>

    * {
        background-color: grey;
        color: white;
        justify-content: center;
    }

    body {
     margin-left: 40%;
     margin-top: 10%;
    }

    p {
        margin-bottom: 20px;
        width: 160px;   
    }

    h2{
        animation-duration: .8s;
        animation-name: clignoter;
        animation-iteration-count: infinite;
        transition: none;
        color: gold;
        margin-bottom: 20px;
    }
    @keyframes clignoter {
        0%   { opacity:1; }
        40%   {opacity:0; }
        100% { opacity:1; }
    }

    button {
        width: 50px;
        height: 50px;
        
    }
    button:hover{
        color: gold;
        background-color: red;
        border: solid 2px gold;
        transition-duration: 0.5s;
    }

    #reset {
        width: 160px;
        margin-top: 20px;
        border: solid 2px black;
    }
    #reset:hover{
        color: gold;
        background-color: red;
        border: solid 2px gold;
        transition-duration: 0.5s;
    }

</style>
