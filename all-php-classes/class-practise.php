<?php
//Class-70: Introduction to PHP //Practise from codejogot documentation

echo 'Hello world!' . '<br>';   //first script in php

$name = 'John Doe';      //syntax
echo "Welcome " . $name; 

echo date('Y') . "<br>";


$_name = "Alice";     //variables
$age = 20;
$Age = 23;

echo "Name: " . $_name . "<br>";
echo $age . "<br>";
echo $Age;


$string = 'Hello world!';   //data types
$integer = 10;
$float = 10.5;
$boolean = true;
$arr = ['Apple','Banana','Mango'];
$null = NULL;
var_dump($string) . "<br>";

//comments

//This is sigle line comment and it won't be exicuted

/* This is 
Multi-line comment and it won't be exicuted as well
*/



//Chapter-02: PHP Data Types

//There are 8 types of data types in PHP

//1.string
//2.integer
//3.float(double)
//4.boolean
//5.array
//6.object
//7.Null
//8.resource


//1.String

$str1 = 'Hello world!';
$str2 = "PHP is awosome";

echo $str1 . " " . $str2 . "<br>" ;

//2.Integer

$int1 = 100;
$int2 = -50;

echo 'Sum: ' .  $int1 + $int2  . "<br>";

//3.Float (Double)

$f1 = 14.858;
$f2 = 3.1416;

echo $f1 - $f2 . "<br>";


//4. Boolean

$is_php_fun  = true;
$is_php_hard = false;

if($is_php_fun){
  echo "PHP is fun! <br>";
}
else{
  echo "PHP is not fun! <br>";
}

//5.Array

$arr = array('Apple','Banana','Mango');
echo $arr[0];

//note: there are three types of array in PHP such as:

//1. Indexed Array (সংখ্যায় ভিত্তিক)
//2. Associative Array (কী-ভিত্তিক)
//3. Multi-Dymensional Array

//6. PHP Object  ?


//7. PHP NULL

$null = NULL;
var_dump($null) ;

//8. Resourse ?


//Checking Data Types

$x = 10;

var_dump($x);
echo gettype($x);

$arr1 = [14,38,49,95];
$sum1 = 0;
for($i = 0; $i < count($arr1); $i++){
 $sum1 += $arr1[$i];
}

echo " sum: $sum1 <br>";

echo count($arr1);

?>