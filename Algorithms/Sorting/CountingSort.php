<?php

function countingSort($arr) {
    $newArr = [];
    $arrResult = [];

    for($i = 0; $i <= max($arr); $i++) {
        $newArr[$i] = 0;
    }
    for($i = 0; $i <= max($arr); $i++) {
        for($j = 0; $j < count($arr); $j++) {
            if($i == $arr[$j]) {
                $newArr[$i]++;
            }
        }
    }
    for($i = 0; $i < count($newArr); ) {
        if($newArr[$i] == 0) {
            $i++;
        } else {
            $arrResult[] = $i;
            $newArr[$i]--;
        }
    }
    return $arrResult;
}

$arr = [4, 2, 2, 8, 3, 3, 1, 2];
print_r(countingSort($arr));