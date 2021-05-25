<?php

function repositionZero($array){
    foreach($array as $key => $value){
        $value1 = $value%10;     
        if($value === 0 or $value1 === 0){            
            unset($array[$key]);
            array_push($array,$value);   
        }
    }
    //print_r($array);   
    foreach($array as $value){
        echo $value." ";
    } 
    
}

$arr = array(1, 0, 30, 1, 0, 9);

foreach($arr as $value){
    echo $value." ";
}
echo "</br>";
repositionZero($arr);

