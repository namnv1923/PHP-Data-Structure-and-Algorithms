<?php

function extraLongFactorials($n) {
    // Write your code here
    $answer = 1;
    if($n == 1 || $n == 0) {
        $answer = 1;
    }
    else {
        for($i = $n; $i >= 1; $i--) {
            $answer = bcmul($answer, $i);
        }
    }
    echo $answer;
}

extraLongFactorials(10);