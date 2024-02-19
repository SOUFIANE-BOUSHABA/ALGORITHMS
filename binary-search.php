<?php 
  
function search(Array $arr, $x) 
{ 
    $count = count($arr); 
    if ($count === 0) return false;
      
    for ($low = 0, $high = $count - 1; $low <= $high;) {
        $mid = floor(($low + $high) / 2);

        if ($arr[$mid] == $x) {
            return true;
        }

        if ($x < $arr[$mid]) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return false;
} 
$arr = array(1, 2, 7, 9, 3, 4, 5); 
$x = 7; 
if(search($arr, $x) == true) { 
    var_dump($arr);
    echo $x." Exists"; 
} 
else { 
    echo $x." not  Exist"; 
} 

?> 