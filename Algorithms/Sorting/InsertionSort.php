<?php

function insertionSort($arr) {
    for ($i=1; $i<count($arr); $i++){
        $tam = $arr[$i];
        $j = $i-1;
        while ($j > -1 && $arr[$j]>$tam){
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $tam;
    }
    return $arr;
}

$arr = [10, -5, -5, 8, 4, 4, 0, 1];
print_r(insertionSort($arr));
