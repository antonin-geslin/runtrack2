<?php
    function gras($str) {
        ucfirst($str);
        return '<b>'.$str.'</b>';
    }

    function cesar($str, $nbr) {
        $result = '';
        for ($i = 0; $i <= strlen($str) - 1; $i++) {
            $ascii = ord($str[$i]);
            if (ctype_lower($str[$i])){
                $ascii = (($ascii - 97 + $nbr) % 26) + 97;
                $result .= chr($ascii);
            } else {
                $ascii = (($ascii - 65 + $nbr) % 26) + 65;
                $result .= chr($ascii);
            }
        }
        return $result;
    }

    function plateforme($str) {
        $temp = strlen($str);
            if ($str[$temp-1] == 'e' && $str[$temp-2] == 'm') {
                return $str.'_';
            } else {
                return $str;
            }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="strLabel">Str</label>
        <input type="text" name="str" id="str">
        <label for="fonction">Fonction</label>
        <select name="fonctions" id="fonctions">
            <option value="">--Please choose an function--</option>
            <option value="Gras">Gras</option>
            <option value="Cesar">Cesar</option>
            <option value="Plateforme">Plateforme</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
    
    <?php
            if (isset($_POST['str']) && isset($_POST['fonctions'])) {
                $str = $_POST['str'];
                $fonctions = $_POST['fonctions'];
                if ($fonctions == "Gras") {
                    echo gras($str);
                } elseif ($fonctions == "Cesar") {
                    echo cesar($str, 2);
                } elseif ($fonctions == "Plateforme") {
                    echo plateforme($str);
                }
            }
    ?>
</body>
</html>