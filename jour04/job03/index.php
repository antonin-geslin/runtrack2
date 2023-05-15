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
        <label for="test">Test</label>
        <input type="text" name="test" id="test">
        <input type="text" name="test2" id="test2">
        <input type="text" name="test3" id="test3">
        <input type="submit" value="Envoyer">
    </form>
    <?php 
    $i = 0;
        foreach ($_POST as $key) {
            $i++;
        }
        echo "Le nombre d'arguments POST envoyé est :".$i;
    
    ?>
    
</body>
</html>