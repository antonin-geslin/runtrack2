<?php 
    function occurence($str, $char){
        $count = 0;
        for($i = 0; $i <= strlen($str); $i++){
            if ($str[$i] == $char){
                $count += 1;
            }
        }
        return $count;
    }

    echo occurence("hello", "l");
    echo occurence("hello", "e");
?>