<?php
$arr =  array(10,9,8,7,6,5,4,3,2,1);
$rev_arr = [];
$count =count($arr);

for($i=$count-1;$i>=0;$i--){
    
    $rev_arr[] = $arr[$i];

}
print_r($rev_arr);

?>