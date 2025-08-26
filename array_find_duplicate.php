<?php
$arr =  array(1,1,2,3,4,5,6,7,8,9);

$duplicate =[];
$count = count($arr);
for($i=0; $i<$count; $i++){
   $val = $arr[$i];

   for($j=$i+1;$j<$count;$j++){

    if($val == $arr[$j]){
        if(!in_array($val, $duplicate)){
        $duplicate[] =$val;
        
    }

   }

}
   
}

print_r($duplicate);




?>