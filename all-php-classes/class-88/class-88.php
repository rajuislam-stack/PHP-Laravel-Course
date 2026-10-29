<!-- //Class-88 //Topics: UVA Problem 12455, PHP include vs require -->

<?php 

echo false + true;
echo "<br>";

//1. UVA Problem 12455: Bars  (Dynamic Programming)

$n = 4;
$a = [4,2,1,8];
$p = 0;

function recursiveFn($i, $sum){
    global $n, $a, $p;
    if($sum == $p) return true;
    if($i == $n || $sum > $p) return false;

    return recursiveFn($i+1, $sum + $a[$i] ) + recursiveFn($i + 1, $sum);
}

if(recursiveFn(0, 0)) echo "Yes <br>";
else echo "NO <br>";




//2. PHP Include vs Require

 include "header.php";

 require "header.php";


?>



<?php include "footer.php" ?>