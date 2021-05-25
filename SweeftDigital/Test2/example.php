<?php
function reverseInt($int){
    while($int>0)
    {
        $last=$int%10;
        echo $last;
        
        $int=floor($int/10);
    }
}

reverseInt(12345);
?>