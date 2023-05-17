<?php

if(isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];

    if(isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600); 
        $prenom = ''; 
    }
} else {
    if(isset($_POST['connexion'])) {
        $prenom = $_POST['prenom'];
        setcookie('prenom', $prenom, time() + (86400 * 30));
    } else {
        $prenom = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php
    
    if(empty($prenom)) {
        echo '
        <form method="post" action="">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom">
            <input type="submit" name="connexion" value="Connexion">
        </form>
        ';
    } else {
        
        echo "Bonjour ".$prenom." !<br>";
        echo '
        <form method="post" action="">
            <input type="submit" name="deco" value="Déconnexion">
        </form>
        ';
    }
    ?>
</body>
</html>