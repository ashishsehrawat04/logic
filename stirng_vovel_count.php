<?php
$str = "this is string";
$uppercase = strtoupper($str);

$str_count = strlen($str);

$vovel =0;
$constrant = 0;
for($i=$str_count-1;$i>=0;$i--){

    $ch = $uppercase[$i];

    if ($ch >= 'A' && $ch <= 'Z') {

        if($uppercase[$i]=="A" || $uppercase[$i]=="E" || $uppercase[$i]=="I" || $uppercase[$i]=="O" || $uppercase[$i] =="U"){
            $vovel = $vovel+1;
        }else{
            $constrant =$constrant+1;
        }

    }
        

}
echo "  vovels  :".$vovel ."   constrant  ". $constrant ." total length  ".$str_count;

?>