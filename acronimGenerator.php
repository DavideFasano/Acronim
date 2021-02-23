<?php

require './acronimizeName.php';

$dataset = array(
['gioco molto difficile','G.M.D.'],
['General Motors','G.M.'],
['Federal Bureau Investigation','F.B.I.']
);

foreach ($dataset as $row) {
    $text = $row[0];
    $atteso = $row[1];
    

    $result = acronimizeName($text);
    if ($result == $atteso) {
        //echo "PASS - tutto ok\n";
    } else {
        echo "FAIL - test fallito linea: $line \n";
        echo "xxx".$result."xxx"."\n";
    }
}