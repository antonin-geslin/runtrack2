<?php 
    $str = "Certaines choses changent, et d'autres ne changeront jamais";
    $result = '';

    $last = '';
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        $count++;
    }

    $result .= $str[$count-1];

    for ($i = 1; $i <= $count-1; $i++) {
        if (isset($str[$i + 1])) {
            $result .= $str[$i + 1];
            $result .= $str[$i];
        }
    }

    $result .= $str[0];
    echo $result;
?>