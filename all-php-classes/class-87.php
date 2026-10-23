<!-- //Class-87 //Topic: Dynamic Programming with Top down & Bottom up Approach -->


<?php

$n = 4;
$arr = [2,3,8,9];
$p = 20;

function f($i, $sum){
  global $n, $arr, $p;
  
  if($sum == $p) return true;
  if($i >= $n) return false;

  return f($i+1, $sum + $arr[$i]) + f($i + 1, $sum);

}

if(f(0,0) == true) echo "Yes";
else echo "NO"



?>