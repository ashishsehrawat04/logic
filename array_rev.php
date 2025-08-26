<?php


$arr = array(1,2,3,4,5,6,7,8,9);

$count =0;

foreach($arr as $arr_list){
    $count++;
}
$rev_arr = [];
for($i = $count - 1; $i >= 0; $i--){
    $rev_arr[] = $arr[$i];
}


print_r($rev_arr);






?>