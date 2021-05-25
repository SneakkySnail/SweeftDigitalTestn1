<?php
function isProgression($progression)
  {
   $d = $progression[1] - $progression[0];
   for($i=0; $i<sizeof($progression)-1; $i++)
    {
        if($progression[$i+1] - $progression[$i] != $d)
        {             
            return "<h3>არ არის არითმეტიკული პროგრესია</h3>";
        }       
    }
    return "<h3>არის არითმეტიკული პროგრესია</h3>";
}
$progression1 = array(1,3,5,7,9);
$progression2 = array(2,6,8,11,12);

//print_r($progression1);
foreach($progression1 as $value){
    echo $value." ";
}
print_r(isProgression($progression1));

//print_r($progression2);
foreach($progression2 as $value){
    echo $value." ";
}
print_r(isProgression($progression2));
?>