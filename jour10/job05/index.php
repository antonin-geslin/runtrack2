<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', 'root');

    $requete = $bdd->prepare('SELECT * FROM etudiants WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) > CURDATE();');
    $requete->execute();
    $users = $requete->fetchAll();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Prenom</th>';
    echo '<th>Nom</th>';
    echo '<th>Naissance</th>';
    echo '<th>Sexe</th>';
    echo '<th>Email</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($users as $user) {
        echo '<tr>';
        echo '<td>'.$user['prenom'].'</td>';
        echo '<td>'.$user['nom'].'</td>';
        echo '<td>'.$user['naissance'].'</td>';
        echo '<td>'.$user['sexe'].'</td>';
        echo '<td>'.$user['email'].'</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
?>