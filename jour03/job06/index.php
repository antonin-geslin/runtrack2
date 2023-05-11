<?php 
    $str = "Les choses que l'on possède finissent par nous posséder.";
    $result = '';
    $count = 0;
    $j = 0;
    while (isset($str[$j])) {
        $count ++;
        $j++;
    }

    for ($i = $count - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }


    echo $result;
?>