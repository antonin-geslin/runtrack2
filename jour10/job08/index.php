<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', 'root');

    $requete = $bdd->prepare('SELECT SUM(capacite) AS capacite_totale FROM salles;');
    $requete->execute();
    $salles = $requete->fetch();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Capacite Totale</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'.$salles['capacite_totale'].'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
?>