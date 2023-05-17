<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="Post">
        <label for="test">Largeur</label>
        <input type="text" name="largeur" id="largeur">
        <label for="test">Hauteur</label>
        <input type="text" name="hauteur" id="hauteur">
        <input type="submit" value="Envoyer">
    </form> 
    <?php 
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        /*$largeur = intval($_POST['largeur']);
        $hauteur = intval($_POST['hauteur']);
        $temp = 0;
        for ($i = 0; $i <= $hauteur; $i++) {
            for ($j = 0; $j <= $temp; $j++) {
                if ($j = 0) {
                    echo '/';
                } elseif ($j == $temp) {
                    echo "'\'";
                } elseif ($j != 0 || $j != $temp) {
                    echo '_';
                }
            }
            $temp -= 1;
    }*/
        for ($i = 0; $i <= $hauteur; $i++) {
            if ($i == 0 || $i == $hauteur) {
                for ($k = 0; $k <= $largeur; $k++ ) {
                    echo '_';
                    if ($k == $largeur) {
                        echo "\n";
                    }
                }
            }
            for ($j = 0; $j <= $largeur; $j++) {
                if (($j == 0 || $j == $largeur) && $i != 0 && $i != $hauteur) {
                    if($j == $largeur) {
                        echo ' |'."\n";
                    }
                    else {
                        echo '| ';
                    }
                }
                elseif ($i != 0 && $i != $hauteur){
                        echo "&nbsp&nbsp";
                }
            }
            echo '<br/>';
        }
    }
    
    ?>
    
</body>
</html>