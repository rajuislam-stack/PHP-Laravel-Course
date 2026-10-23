<!-- //Class-71 //Practise from codejogot documentation -->
<?php 

//Chapter-03:PHP String

$str = "Hello world <br>";
echo $str;

$name = "john";

$singleQuote = 'Hello $name <br>';
echo $singleQuote;

$doubleQuote = "Hello $name <br>";    //Processing variable
echo $doubleQuote;


$firstName = "John";
$lastName = " Doe <br>";

echo $firstName . $lastName;   //Concetanation


$text = "Hello, PHP!";

echo strlen($text);      //String length


$access = "PHP is fun <br>";

echo $access[0] ,$access[4] . "<br>";    //Accessing charecter


//String Functions in PHP

$text1 = "PHP is fun! <br>";
echo strlen($text1);            //String length;

$text2 = 'PHP is a amazing languege!';

echo str_word_count($text2) . '<br>';     //Word count


$text3 = "Hello world!";

echo strrev($text3);      //Reverse a string


$text4 = 'I love programming!';

echo strpos( $text4, "ove");   //Position fo a string


$text5 = " I love javascript!";

echo str_replace("javascript", 'PHP', $text5) . "<br>";  //Replacing


// Converting String Case

$text6 = "Hello PHP!";

echo strtoupper($text6);      //Uppercase

echo strtolower($text6) . "<br>";      //Lowercase


$text7 = "php is great! <br>";

echo ucfirst($text7);       //Uppercase first letter

echo ucwords($text7);    //Uppercese word's first letter


$text8 = " PHP is awosome! <br> ";

echo trim($text8);       //Trimming


$text9 = "PHP is a powerful languege! <br>";

$arr =  explode(' ', $text9);   //Splitting an array with specific charecter
print_r($arr);

$arr1 = str_split($text9);     //Splitting indivusual charecters
print_r($arr1);




//Chapter-04: PHP Numbers


// Types of Numbers in PHP

//1. Integer
//2. Float or Double  //Mainly

//3.Infinity
//4.NaN



$intNum = 10;
$intFloat = 3.1416;

var_dump($intNum);
var_dump($intFloat);



//PHP Number Function


echo abs(-15) . '<br>';   //Returns positive number

echo round(3.8);    //Round to the nearest integer

echo ceil(7.01);    //Up to the nearest integer

echo floor(7.9);    //Down to the nearest integer

echo rand(1,10)  . "<br>";    //Generates random number


var_dump(is_numeric(10)); //Checking is number or not

var_dump(is_numeric('Hello world!'));


$x = 10.94050;

echo number_format($x,3) . "<br>";     //Formatting numbers



//Number Operations

$a = 10;
$b = 3;

echo $a + $b . "<br>";

echo $a - $b . "<br>";

echo $a * $b . "<br>";

echo $a / $b . "<br>";

echo $a % $b . "<br>";  //Remainder



//Real-Life Examples


//Example 1: Shopping Cart Calculation

$item1_price =  300;
$item2_price = 450.40383;
$total_price = $item1_price + $item2_price;

echo "Tatal Price: " . number_format($total_price, 2) . "<br>";


//Example 2: Temperature Conversion (Celsius to Fahrenheit)

$celsius = 37;
$fahrenheit = ($celsius * 9 / 5) + 32;

echo "$celsius °C equels to $fahrenheit °F <br>" ;


$division = 8/ 8;

echo var_dump($division);   

?>