<?php

$arr = array(9,8,7,6,5,4,3,2,1);
$n = count($arr);


for($i=0;$i<=$n-1;$i++){
    
    for($j=$i+1;$j<$n;$j++){
        if($arr[$i]>$arr[$j]){
            $max = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] =$max;
        }
    }
 
}

print_r($arr);



?>