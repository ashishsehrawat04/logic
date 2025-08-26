
<?php

$arr = array(1,2,22,3,221,5,6,7,8);
$array2 =  $arr;

$even = [];

 
foreach($array2 as $list){
   
   if($list%2==0){
     $even[] = $list;
   }
}
print_r($even);

?>