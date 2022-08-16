<?php

function insertionSort($arr) {
    foreach ($arr as $i => $value) {
        for ($j = $i; $j > 0 && $arr[$j - 1] > $value; --$j) {
            $arr[$j] = $arr[$j - 1];
        }
        $arr[$j] = $value;
    }

    return $arr;
}

$arr = [10, -5, -5, 8, 4, 4, 0, 1];
print_r(insertionSort($arr));
