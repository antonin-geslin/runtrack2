<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', 'root');

    $requete = $bdd->prepare('SELECT COUNT(*) AS nombre_etudiants FROM etudiants;');
    $requete->execute();
    $users = $requete->fetch();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nombre d étudiants</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'.$users['nombre_etudiants'].'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
?>