<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', 'root');

    $requete = $bdd->prepare('SELECT nom, capacite FROM salles');
    $requete->execute();
    $salles = $requete->fetchAll();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nom</th>';
    echo '<th>Capacite</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($salles as $salle) {
        echo '<tr>';
        echo '<td>'.$salle['nom'].'</td>';
        echo '<td>'.$salle['capacite'].'</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
?>