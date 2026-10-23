<!-- class-71: //Topics: chapter-03: PHP Strings ,chapter-04: PHP Numbers -->


<?php 

// chapter-03: PHP Strings  

$x = 'hello';      //String
$y = " world! <br>";
echo $x . $y;


$firstName = 'John';
$lastName = "Doe";

echo $firstName . " " . $lastName . "<br>";     //String concetanation

//Built-in string method

$text = "Hello PHP ";      //Length
echo strlen($text);


$s = "Codejogot";   

echo " " . $s[3] . "<br>";    //Accessing string charecters


$text1 = "PHP is an amazing languege";

echo str_word_count($text1);   //Count words in a string 


$text2 = "Hello world!";

echo strrev($text2) . "<br>";         //Reverse a string


$text3 = "I love PHP languege.";

echo  strpos($text3, 'PHP');     //Position of a word


$text3 = 'I love java <br>';

echo str_replace('java', 'PHP', $text3);   //Replacing text


//Converting string

$text4 = "Hello PHP <br>";


echo strtoupper($text4);  //Uppercase letter

echo strtolower($text4);   //Lowercase letter

echo  ucfirst('php is great! <br>');  //Uppercase first letter

echo ucwords('php is great! <br>');  //Uppercase each word's first letter


$text5 = ' Hello world! <br> ';

echo trim($text5) ;  //Triming a string


$sentence1 = 'PHP is a powerful languege. <br>';

$word1 = explode(' ', $sentence1);     //Spliting with specific charecters

print_r($word1);


$sentence2 = "PHPisfun!";

$word2 = str_split($sentence2, 3);   //Spliting indivisual charecters

print_r($word2 );



//Chapter-04: PHP Numbers


$num1 = 10;
var_dump($num1);         //Integer number

$num2 = 3.1416;

var_dump($num2) ;     //Floating point number (Double)



// Built-in number methods


echo abs(-15.48) . "<br>";   //Return positive number

echo round(4.5) .'<br>';  //Round to the nearest  integer


echo ceil(3.1) . '<br>';   //Up to the  nearest integer

echo floor(3.9) . "<br>";  //Down to the nearest integer


echo rand(1,100) . "<br>";  //Random number


var_dump(is_numeric(100));      //Checking is it number or not

var_dump(is_numeric('hello world!')); 


echo number_format(750.50 , 4) . "<br>";  //Fomatting number


//Number operations

$a = 10;
$b = 3;

echo $a + $b . '<br>';

echo $a - $b . "<br>";

echo $a / $b . "<br>";

echo $a % $b . "<br>";  //(Remainder)


//Real life examples

//Example-01: Shopping cart calculation

$item1_price = 300;
$item2_price = 450.50;
$total_price = $item1_price + $item2_price;

echo "Total Price: $" . number_format($total_price, 2) . "<br>";

//Example-02:Temperature conversion (Celsius to Fahrenheit)

$celsiul = 37;
$fahrenheit = ($celsiul * 9 / 5) + 32;

echo "$celsiul °C equal to $fahrenheit °F";


?>