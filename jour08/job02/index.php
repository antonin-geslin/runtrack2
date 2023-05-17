<?php
$nbvisites = 0; 

if(isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1; 
}

setcookie('nbvisites', $nbvisites, time() + (86400 * 30), '/');

if(isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600, '/'); 
    $nbvisites = 0;
}

echo "Nombre de visites : ".$nbvisites;
?>

<form method="post" action="">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
</html>