<?php
$str = "helloen2";
$i=0;
$result ="";

while(isset($str[$i])){
    if (strpos($result, $str[$i]) === false) {
        $result .=$str[$i];

    }
    $i++;
}

echo $result;

?>