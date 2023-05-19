<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', 'root');

    $requete = $bdd->prepare('SELECT SUM(superficie) AS superficie_totale FROM étage;');
    $requete->execute();
    $etages = $requete->fetch();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Superficie Totale</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'.$etages['superficie_totale'].'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
?>