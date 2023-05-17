<?php 
    function calcule($nbr, $char, $nbr2) {
        if ($char == "+") {
            return $nbr + $nbr2;
        } elseif ($char == "-") {
            return $nbr - $nbr2;
        } elseif ($char == "*") {
            return $nbr * $nbr2;
        } elseif ($char == "/") {
            return $nbr / $nbr2;
        } elseif ($char == "%") {
            return $nbr % $nbr2;
        }
    }


    echo calcule(5, "+", 5);
    echo calcule(5, '*', 5);
?>