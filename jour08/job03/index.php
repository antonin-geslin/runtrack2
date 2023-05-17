<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
        <input type="submit" name="submit" value="Envoyer">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
    <?php
    session_start(); 

    if (isset($_POST['prenom']))
    {
        $prenom = $_POST['prenom'];
        if(isset($_SESSION['prenoms'])) {
            $_SESSION['prenoms'][] = $prenom;
        } else {
            $_SESSION['prenoms'] = array($prenom);
        }
    }

    if(isset($_POST['reset'])) {
        unset($_SESSION['prenoms']);
    }
    if (isset($_SESSION['prenoms'])) {
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "Utilisateur : ".$prenom.'<br/>';
        }
    }
    ?>
</body>
</html>
