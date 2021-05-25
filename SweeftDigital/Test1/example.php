<?php

function fibonacci($limit){
    echo "მომდევნო $limit რიცხვისთვის: ";
    $first = 0;  
    $second = 1;    
    echo $first.' '.$second.' ';  
    for($all = 0; $all <= $limit-3; $all++)  
    {  
        $third = $second + $first;  
        echo $third.' ';  
        $first = $second;  
        $second = $third;  
    }    
}
fibonacci(5);
?>