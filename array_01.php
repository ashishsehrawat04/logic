<?php
//find greater number


$arr = array(0,312,22,3,221,5,6,7,8);
 
$max = 0;
foreach($arr as $list){
   
    if($max < $list){
        $max = $list;
    }
}

echo $max;

?>