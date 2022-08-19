<?php

function bubbleSort($arr) {
    $arrCount = count($arr);
    for($i = 0; $i < $arrCount - 1; $i++) {
        for($j = $i + 1; $j < $arrCount; $j++) {
            if($arr[$j] < $arr[$i]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
    }
    return $arr;
}

$arr = [10, -5, 8, 4, 0, 1];
print_r(bubbleSort($arr));
