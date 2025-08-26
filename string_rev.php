<?php
$str = "this is my string";

$rev="";
$count = strlen($str);


for($i=$count-1;$i>=0;$i--){
    $rev .= $str[$i];
}

echo $rev;



?>