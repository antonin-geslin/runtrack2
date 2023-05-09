<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "string";
        $bool = true;
        $int = 10;
        $float = 0.9;

        unset($_GET, $_POST, $_COOKIE, $_FILES);
        $variables = get_defined_vars();

        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Type</th>';
        echo '<th>Nom</th>';
        echo '<th>Valeur</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($variables as $name => $value) {
            echo '<tr>';
            echo '<td>'.gettype($value).'</td>';
            echo '<td>'.$name.'</td>';
            echo '<td>'.$value.'</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    ?>
</body>
</html>
