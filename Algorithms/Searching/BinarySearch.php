<?php

function binarySearch($arr, $x){
    sort($arr);
    $start = 0;
    $end = count($arr) - 1;

    while($start <= $end) {
        $currentIndex = floor(($start + $end) / 2);
        $currentValue = $arr[$currentIndex];
        if($currentValue == $x) {
            return 1;
        }
        if($x < $currentValue) {
            $end = $currentIndex - 1;
        }
        if($x > $currentValue) {
            $start = $currentIndex + 1;
        }
    }
    return 0;
}

$arr = [2, 10, -2, -5, 2, 3, 2];
$value = 10;

if(binarySearch($arr, $value)) {
    print_r("Exist");
} else {
    print_r(" No exist");
}
