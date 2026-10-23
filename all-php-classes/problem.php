<?php

function x($input, $arr,$stick){
   sort($arr);
   
   $count = 0;

   for($i = 0; $i <= $input; $i++){
      
       if($arr[$i] == $stick) return "Yes <br>";

      for($j = $count + 1; $j < $input; $j++){
         if($arr[$count] + $arr[$j] == $stick ){
          return "Yes <br>";
         }
      }

       $count++;

   }

    return  "False";
}

echo x(4,[3,4,1,9],14);
?>