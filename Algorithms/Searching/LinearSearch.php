<?php

function linearSearch($arr, $x) {
    for ($i = 0; $i < count($arr); $i++) {
        if($arr[$i] == $x) {
            return $i + 1;
        }
    }
    return 0;
}

$arr = [2, 10, 3, -1, 0, 8];
$x = 10;
if(linearSearch($arr, $x)) {
    print_r(linearSearch($arr, $x));
} else {
    print_r("No exist");
}
