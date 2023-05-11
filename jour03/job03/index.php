<?php
    $str = "I'm sorry Dave I'm afraid I can't do that.";
    $voyelles = array('I','a', 'e', 'i', 'o', 'u', 'y');

    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($voyelles as $value) {
            if ($str[$i] == $value) {
                echo $str[$i];
            }
        }
    }
?>