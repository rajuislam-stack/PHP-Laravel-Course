<!-- //Clas-72: //Chapters: PHP Casting, PHP Math, PHP Constants, PHP Magic Constant, PHP Operators, PHP Loops, PHP Functions, PHP Arrays,  PHP Array: Create, Access, Add, Remove, Array Functions: A comprehensive guide -->
 
<?php
define('MY_OWN_SITE_NAME', "Raju Islam");     //Constant

//Chapter-05: PHP Casting

//Type casting

$x = (string)10;     //Integer to String
var_dump($x);        

$y = '100474';
$typeCast = (int)$y;
var_dump($typeCast);  //String to Integer



//Chapter-06: PHP Math 

//Built-in functions

$number1 = -10;
echo abs($number1) . "<br>";     //Returns positive number

$arr = [28,58,349];
echo max($arr) . "<br>";       //Returns maximum number

$number2 = 18485837584.000048;
echo number_format($number2,2) . "<br>";  //formatting number

$n = 5;
echo pow($n,2) . "<br>";        //Power


//Chapter-07: PHP Constants

//Defining contants value using define method

define("PI", 3.1416);
$r = 4;
echo PI * pow($r,2)  . "<br>";    

define("ROOT_NAME", "Codojogot");
echo ROOT_NAME . "<br>";      

echo MY_OWN_SITE_NAME . "<br>";


//Alternatively defining contants value using const keyword

const SITE_NAME = 'CodeJogot';

echo SITE_NAME . "<br>";

//Note: Always define constant value at the top lavel. 


//Predefined constant

echo PHP_VERSION . "<br>";

echo PHP_INT_MAX  . "<br>";

echo __LINE__  . "<br>";

echo __FILE__  . "<br>";



//Chapter-08: PHP Magic Constant


echo __LINE__ . "<br>";

echo __DIR__ . "<br>";

echo __FILE__ . "<br>";



//Chapter-09: PHP Operators

//Arethmetic Operators

$a = 10;
$b = 5;

echo $a + $b  . "<br>";

//Comparision Operator

$isPHP_easy = true;
$isPHP_is_fun = true;

if($isPHP_easy == $isPHP_is_fun){
  echo 'Obveously PHP is fun and convenient! <br>';
}
else{
  echo "PHP is hard!";
}



//Chapter-10: PHP Loops


for($i = 0; $i <= 10; $i++){      //For loop
  echo $i . "<br>";
}

$i = 1;
while($i <= 3){
  echo "Hello $i <br>";    //While loop
  $i++;
}


$fruits = ['Apple', 'Banana', "Mango"];

foreach($fruits as $fruit){      //For each
  echo $fruit . '<br>';
}


//Chapter-11: PHP Functions

function sumation($para1 , $para2){
  return $para1 + $para2;
}

$sum = sumation(4,8);

echo $sum . "<br>";

echo sumation(100,800) . "<br>";


//Chapter-12: PHP Arrays

$indexArr = [48,394,59,49];

echo $indexArr[1] . "<br>";    //Indexed array


$ages = ["Abdur Rahim" => 32, 'Rakib' => 14, 18 => 'Al-Rafi'];

echo $ages['Abdur Rahim'] . "<br>";  

echo $ages[18] . "<br>";       //Associative array


//Looping through an array

$arr1 = [48,493,949];

foreach($arr1 as $element){
  echo "Element of the array is : $element <br>";
}


$arr2 = ['fruit'=> 'Apple', 29=> 'Age of Rakib', true => 'is_PHP_fun'];

foreach($arr2 as $key => $value ){
  echo "Keys and Values of the array are $key , $value <br>";
};

//PHP Array functions

$arr3 = ['Apple'=> 4, 'Mango'=> 84, 'Banana' => 10];
echo count($arr3) . "<br>";    //Counting length

$x = 0;
$arr4 = [3,5,1,84,9];

sort($arr4);   //Accending order
rsort($arr4);  //Descending order

while($x < count($arr4)){
  echo "Ascending array element:  $arr4[$x] <br>";
  $x++;
}                       //Sorting 


$result = array_sum($arr4);
echo $result . '<br>';          //Sumation of an array


$arr5 = [2,4,3,18];

array_push($arr5,4848);
print_r($arr5) ;       //Adding element



//Chapter-13: PHP Array: Create, Access, Add, Remove

$arrX = [2,4,1,5];

array_unshift($arrX, 'hello');  //Adding first element

print_r($arrX);



//Chapter-14: Array Functions: A comprehensive guide


//Searching in arrays

$arr6 = ['Apple', 'Banana', "Mango", "Jack_fruits"];

var_dump(in_array('Mango', $arr6)) . "<br>";   //Returns boolean value


echo array_search('Jack_fruits', $arr6);   //Returns index




?>

