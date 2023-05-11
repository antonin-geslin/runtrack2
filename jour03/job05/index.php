<?php
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
    $voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U');
    $voyelle_count = 0;
    $consonne_count = 0;
    $dic = array();
    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($voyelles as $value) {
            if ($str[$i] == $value) {
                $voyelle_count++;
                break;
            }
        }
        if (!in_array($str[$i], $voyelles) && $str[$i] != ' ' && $str[$i] != "'") {
            echo $str[$i] . ' ';
            echo $i.' ';
            $consonne_count++;
        }
    }


    $dic['voyelle'] = $voyelle_count;
    $dic['consonne'] = $consonne_count;

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Voyelles</th>';
    echo '<th>Consonnes</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'.$dic['voyelle'].'</td>';
    echo '<td>'.$dic['consonne'].'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
?>