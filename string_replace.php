<?php
$str = "hel lo Wor ld ";
$n = strlen($str);

for($i=$n-1;$i>=0;$i--){
    $char = $str[$i];

    if($char ==" "){
        $str[$i]='-';
    }

}
echo $str;

?>