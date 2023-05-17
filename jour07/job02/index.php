<?php 
    function bonjour($bool) {
        if ($bool == true) {
            echo "Bonjour!";
        } else {
            echo "Bonsoir!";
        }

    }


    bonjour(true);
    bonjour(false);
?>