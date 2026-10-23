<!-- //Class-85 //Chapters: PHP String, Numbers, Casting, Math, Constant, Magic Constant, Operators, Loop -->

<?php

//Chapter-3: PHP String

$firstName = "John"; 
$lastName = ' Doe';
echo $firstName . $lastName . "<br>";

$str1 = 'PHP';
echo strlen($str1);
echo '<br>';

$str2 = 'Hello world!';
echo $str2[0];
echo '<br>';

$str3 = "PHP is a amazing language!";  //String function in PHP
echo str_word_count($str3);
echo '<br>';

$str4 = 'PHP is fun';
echo strrev($str4);
echo '<br>';

$str5 = "PHP is awosome.";
echo strpos($str5,'is');
echo '<br>';

$str6 = "I love Java.";
echo str_replace("Java",'PHP',$str6);
echo '<br>';

$str7 = 'PHP is a programming language of Backend';
echo strtoupper($str7);      //Converting string case
echo '<br>';

echo strtolower($str7);
echo '<br>';

$str8 = 'php is great!';
echo ucfirst($str8);
echo '<br>';

echo ucwords($str8);
echo '<br>';



$str9 = '  PHP is a programming language. ';
echo trim($str9);     //Trimming
echo '<br>';

$str10 = 'PHP is a powerful language.';
print_r( str_split($str10,4));
echo '<br>';

print_r(explode(' ',$str10));
echo '<br>';


//Chapter-4: PHP Numbers


$int1 = 10;
$float1 = 3.1416040;

var_dump($int1);
echo "<br>";

var_dump($float1);
echo "<br>";


function myabs($x){
  if($x < 0) return $x * -1;     //abs function logic
  return $x;
}

echo myabs(-200);
echo "<br>";


$num1 = -13;
echo abs($num1);      //Number functions in PHP
echo "<br>";


echo round(14.5);
echo "<br>";

echo ceil(4.2);
echo "<br>";

echo floor(4.9);
echo "<br>";


echo rand(1,100);
echo "<br>";


var_dump( is_numeric('4'));
echo "<br>";

var_dump( is_numeric('455hello'));
echo "<br>";


//Chapter-5:PHP Casting

$str11 = '48';
$int2 = (int) $str11;
var_dump($int2);
echo "<br>";

var_dump( (float) "48.45");
echo "<br>";


var_dump((bool) 1);
echo "<br>";


$str12 = "PHP";
$arr1 = (array) $str12;

print_r($arr1);
echo "<br>";


$arr2 = ['name'=> 'john doe', 'age'=> 26];
$obj1 = (object) $arr2;

var_dump($obj1);
echo "<br>";




//Chapter-6: PHP Math 


echo round(6.4);
echo "<br>";

echo max(40,44,58,4);
echo "<br>";


echo min([5,58,2,6]);
echo "<br>";


$num2 = 485858493.4554;

echo number_format($num2);
echo "<br>";

echo number_format($num2,2);
echo "<br>";




//Chapter-7: PHP Constant


define("WEBSITE_NAME",'rajuislam.com');

echo WEBSITE_NAME;
echo "<br>";


const PI = 3.1416;

echo PI;
echo "<br>";



echo PHP_VERSION;       //Predefine constant
echo "<br>";

echo __LINE__;
echo "<br>";

echo __FILE__;
echo "<br>";

echo PHP_INT_MAX;
echo "<br>";




//Chapter-8: PHP Magic Constant


echo __DIR__;
echo "<br>";


echo __LINE__;
echo "<br>";




//Chapter-9: PHP Operators

$int3 = 13;
$int4 = 4;

echo $int3 + $int4;
echo "<br>";

echo $int3 % $int4;
echo "<br>";


echo 2 ** 3;
echo "<br>";



//Chapter-10:PHP Loops



for($i = 0; $i <= 10; $i++){
  echo "Count: $i <br>";         //for loop
}


$int5 = 0;

while($int5 <= 10){
  echo "Hello $int5 <br>";     //while
  $int5++;
}


$int6 = 1;

do{
  echo "The number is : $int6 <br>";    //do while loop
  $int6++;
} 
while($int6 <= 10);



$fruits = ['Apple',"Banana","Mango"];

foreach($fruits as $fruit){           //for each loop
  echo "Fruit : $fruit <br>";
}


?>