<?php

$arr = [64, 34, 25, 12, 22, 11, 90];
$n = count($arr);

// Simple sort logic
for ($i = 0; $i < $n; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($arr[$i] > $arr[$j]) {
            // swap
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}

print_r($arr);

?>
