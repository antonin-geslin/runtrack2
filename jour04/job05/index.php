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
        <label for="test">Username</label>
        <input type="text" name="username" id="username">
        <label for="test">Password</label>
        <input type="text" name="password" id="password">
        <input type="submit" value="Envoyer">
    </form>
    <?php 
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo') {
            echo "C'est pas ma guerre";
        }
        else {
            echo "Votre pire cauchemar";
        }
    }
    
    ?>
    
</body>
</html>