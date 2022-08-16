<?php

function permutationEquation($p) {
    // Write your code here
    $arr = [];
    for($i = 0; $i < count($p); $i++) {
        for($j = 0; $j < count($p); $j++) {
            if($p[$j] == $i + 1) {
                for($k = 0; $k < count($p); $k++) {
                    if($p[$k] == $j + 1) {
                        $arr[] = $k + 1;
                    }
                }
            }
        }
    }
    return $arr;
}


$arr = [4, 3, 5, 1, 2];
print_r(permutationEquation($arr));
