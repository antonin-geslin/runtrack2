<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', 'root');

    $requete = $bdd->prepare('SELECT salles.nom AS nom_salle, étage.nom AS nom_etage FROM salles JOIN étage ON salles.id_etage = étage.id;');
    $requete->execute();
    $salles = $requete->fetchAll();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nom Salle</th>';
    echo '<th>Nom Etage</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($salles as $salle) {
        echo '<tr>';
        echo '<td>'.$salle['nom_salle'].'</td>';
        echo '<td>'.$salle['nom_etage'].'</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
?>