<?php

$arr = array(1,2,3,4,45,5,6,67,7,78,8,9,9);

$count = count($arr);

for($i=0;$i<$count;$i++){
    $val=$arr[$i];

    for($j=$i+1;$i<$count;$j++){

        echo $j;
    }
}





?>