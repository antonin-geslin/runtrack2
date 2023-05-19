<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', 'root');

    $requete = $bdd->prepare('SELECT AVG(capacite) AS capacite_moyenne FROM salles;');
    $requete->execute();
    $salles = $requete->fetch();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Capacite moyenne</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'.$salles['capacite_moyenne'].'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
?>