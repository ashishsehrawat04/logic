<?php
$arr_1 =  array(1,4,654,23,542,462,352,5332);
$arr_2 =  array(1,2,3,4,5,462,352,5332);
$arr_merge =[];

foreach($arr_1 as $arr1){
     $arr_merge[] = $arr1;
}

foreach($arr_2 as $arr2){
     $arr_merge[] = $arr2;
}

print_r(array_unique($arr_merge));






?>