<?php    
function Moda($array){      
    $arr = array_count_values($array);    
    arsort($arr);
    $mostCommon = array_keys($arr);
    echo $mostCommon[0];
}

$arr = array(0,1,6,1,1,1,9);
Moda($arr);
?>