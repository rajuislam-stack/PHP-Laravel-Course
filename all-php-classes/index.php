<!-- Class-70: MY first PHP class //Topics: Chapter-01: Introduction to PHP, Chapter-02: PHP Data Types-->

<?php 

//Chapter-01: Introduction to PHP


echo 'Hello world!' . "<br>" ;  //My first PHP code 😎😏


//Syntax of PHP

$name = "John Doe" ;    //variable
$age = 30 ;

echo 'Name: ' . $name . '<br>';    //String Concatenation
echo 'Age: ' . $age . '<hr>'; 


$arr = [10,20,34];         //Array
$sum = 0;

for($i = 0; $i < count($arr); $i++){   //Loop
 $sum += $arr[$i];
};

echo 'Sumation of the array is: ' . $sum . "<br>";

//Data type in PHP

$string = 'hello world!';    //String

$integer = 10;     //Integer

$float = 12.3;    //Float

$arr = ['Apple', 'Banana', 'Mango'];    //Array

$boolean = true ;     //Boolean

$null = NULL ;   //Null


 /* This is 
    multi-line comment in PHP
 */

 //This is single line comment in PHP
  



//Chapter-02: PHP Data Types


//Float 

$a = 5.4;
$b = 15.5;

$sum = $a + $b;

echo "The sum of $a and $b is: $sum " . "<br>";


//Array 

$fruits = ['Apple','Banana','Mango']; 

echo 'Output: ' . $fruits[0] . '<br>';


//Checking data types

$x = 10;

var_dump($x);  //Output: int(10);

echo gettype($x) . "<br>"; //Only shows data type

?>
