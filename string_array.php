<?php
$str =  "hello world";
$i = 0;
$arr = [];
$word = "";
while(isset($str[$i])){
  
    
    if($str[$i] != " "){
       $word .= $str[$i];
    }else{
        $arr[] = $word;
        $word = ""; 
    }
    
  $i++;
}
if ($word != "") {
    $arr[] = $word;
}

print_r($arr);





?>