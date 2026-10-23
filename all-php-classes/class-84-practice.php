<!-- //Class-84: Practice //Practice from CodeJogot Documentation -->

<?php

//Chapter-01: Introduction to PHP

echo "Hello World! <br>";

$name = 'John Doe';
echo "Welcome ". $name . "<br>";     //Varables

$Name = 'Alice';
$age = 24;
echo "Name: $Name Age: $age <br>";

$arr1 = [4 ,44,4];
echo $arr1[0] . "<br>" ;      //Data types

$str = "Hello CodeJogot";
var_dump($str);
echo "<br>";

$currentYear = date("Y");
echo "Current year is: $currentYear <br>" ;


//Single line comment

/*
This is multi-line comment in PHP
 */

//Note: PHP (HyperText Preprocessor);



//Chapter-02: PHP Data Types


$string1 = "Hello World!";
$string2 = 'PHP is awosome!<br>';    //String
echo $string1 . " " . $string2 ;


$num1 = 10;
$num2 = -5;
echo $num1 + $num2 ;        //Number
echo "<br>";

$float1 = 10.4484;
$float2 = 3.141684;
echo $float1 * $float2;     //Float(Double)
echo "<br>";

$is_php_fun = true;
$is_php_hard = false;

if($is_php_fun){
  echo "Yes. PHP is fun.<br>";      //Boolean
}
else{
  echo "No. PHP is not fun.<br>";
}

$arr = array("apple",'banana','mango');
echo $arr[0];                          //Array
echo "<br>";


$null = NULL;
var_dump($null);         //NULL
echo "<br>";


$x = 10 ;
var_dump($x);
echo "<br>";           //Checking data type

echo gettype($x); 


?>