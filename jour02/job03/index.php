<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i <= 20) {
        echo '<i>'.$i.'</i><br/>';
    } elseif ($i == 42) {
        echo 'LaPlateforme_<br/>';
    } elseif ($i <= 50 && $i >= 25) {
        echo '<u>'.$i.'</u><br/>';
    } else {
        echo $i.'<br/>';
    }
}
?>