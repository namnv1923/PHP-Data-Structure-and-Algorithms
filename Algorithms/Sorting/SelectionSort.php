<?php

function selectionSort($arr) {
    $arrCount = count($arr);
    for ($i = 0; $i < $arrCount; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $arrCount; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        if ($i !== $min) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }
    return $arr;
}

$arr = [10, -5, 8, 4, 0, 1];
print_r(selectionSort($arr));

