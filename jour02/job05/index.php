<?php 
function estPremier($nombre) {
    if ($nombre <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i === 0) {
            return false; 
        }
    }
    return true;
}

for ($j = 1; $j <= 1000; $j++) {
    if (estPremier($j)) {
        echo $j.'<br/>';
    }

}
?>