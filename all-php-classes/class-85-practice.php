<!-- //Class-85 //Practice from CodeJogot Documentation -->

<?php

//Chapter-03: PHP Strings

$name1 = "John";

echo 'Welcome $name1';
echo "<br>";

echo "Welcome $name1";     //Variable processing
echo "<br>";


$str1 = "Hello";
$str2 = " World!";

$str3 = $str1 . $str2;   

echo strlen($str3);
echo "<br>";

  //String functions in PHP

  
$str4 = "PHP is a amazing language.";


echo str_word_count($str4);
echo "<br>";

echo strrev($str4);
echo "<br>";


echo strpos($str4, "is");
echo "<br>";

echo str_replace("amazing",'powerful',$str4);
echo "<br>";


  //Converting String Case

$str5 = 'hello, php!';


echo strtoupper($str5);
echo "<br>";

echo strtolower($str5);
echo "<br>";

echo ucfirst($str5);
echo "<br>";

echo ucwords($str5);
echo "<br>";


  //Trimming, splitting

$str6 = " PHP is fun ";

echo trim($str6);
echo "<br>";

var_dump(str_split($str6));
echo "<br>";


$arr1 = explode(" ", $str6);
print_r($arr1);
echo "<br>";





//Chapter-04: PHP Numbers


$int1 = 10;
$float1 = 10.54;

var_dump($int1);
echo "<br>";

var_dump($float1);
echo "<br>";


   //PHP Number Functions


echo abs(-15);
echo "<br>";

echo round(4.344);
echo "<br>";


echo ceil(8.3);
echo "<br>";

echo floor(8.9);
echo "<br>";

echo rand(1,100);
echo "<br>";


var_dump(is_numeric("484"));
echo "<br>";

var_dump(is_numeric("hello"));
echo "<br>";

echo number_format(1040438573, 2);
echo "<br>";

   //examples

$celsius = 37;
$fahrenheit = ($celsius * 9/5) + 32;

echo "$celsius °C equals to $fahrenheit °F";
echo "<br>";




//Chapter-05: PHP Casting



$str7 = "100";    
$int2 = (integer)$str7; //string to integer

var_dump($int2);
echo "<br>";

var_dump((float) "3.1416");
echo "<br>";


var_dump((bool) 0);
echo "<br>";


$str8 = "PHP";
$arr2 = (array) $str8;

var_dump($arr2);
echo "<br>";


$data = ["Name"=> "Alice", "Age"=> 26];

echo var_dump((object) $data);
echo "<br>";


var_dump((string) 100);
echo "<br>";


   //example

$price = "500";
$quantity = "3";
$total_price = (int)$price * (int)$quantity;

echo "Total price: $total_price <br>";




//Chapter-06: PHP Math


echo 13 % 4;
echo "<br>";

echo 5 ** 2;
echo "<br>";


echo ceil(4.0);
echo "<br>";


echo min(4,48,3,5,10);
echo "<br>";

echo max([20,4,8,48]);
echo "<br>";


$num1 = 485394385.938;

echo number_format($num1, 4);
echo "<br>";


   //example

$original_price = 500;
$discount = 15;  //15% discount

$discount_amount = ($original_price * $discount) / 100;

$final_price = $original_price - $discount_amount;

echo "Final Price: " . number_format($final_price, 2) ;
echo "<br>";



//Chapter-07: PHP Constants



define("SITE_NAME",'CodeJogot');

echo SITE_NAME;
echo "<br>";


const SITE_VERSION = 1.0;     //Defining a constant

echo SITE_VERSION;
echo "<br>";




define("_SITE_URL",'codejogot.com');

echo _SITE_URL;
echo "<br>";

 //Predefined Constant

echo PHP_VERSION;
echo "<br>";

echo __LINE__;
echo "<br>";


  //Examples
  

define("BASE_URL", "https://codejogot.com");

echo "<a href='".BASE_URL."/about.php' target='_blank'>About Us</a>";
echo "<br>";



//Chapter-08: PHP Magic Constants


echo "This is line :" . __LINE__;
echo "<br>";

echo "File path : " . __FILE__;
echo "<br>";

echo __DIR__;
echo "<br>";

  //example

function customErr($errMessage){
  return "Error : $errMessage in file " . __FILE__ . " on line " . __LINE__ . "<br>";
}

echo customErr("Uncought type error");
echo "<br>";



//Chapter-09: PHP Operators


$int3 = 10;
$int4 = 4;


echo $int3 % $int4;
echo "<br>";

echo 5 ** 2;
echo "<br>";


$int5 = 10;
echo $int5 /= 5;
echo "<br>";


var_dump(5 <> 6);    //!= (not equal to) operator
echo "<br>";


var_dump( !0);    //Not operator
echo "<br>";


var_dump(5==4 || 5 == 5);  //Or operator
echo "<br>";



$str9 = "Hello,";

echo $str9 .= ' world!';
echo "<br>";


$result = 2 + 3 * 4;    //Operator precenence
echo $result;
echo "<br>";


   //Example

$marks = 86;

if($marks >= 80 && $marks <=100){
  echo "Grade A+ <br>";
}
else if($marks < 80 && $marks >= 60){
  echo "Grade A <br>";
}
else if($marks < 60){
  echo "Grade B <br>";
}
else{
  echo "Invalid marks <br>";
}



//Chapter-10: PHP Loops


for($i = 0; $i <= 5; $i++){
  echo "Count $i <br>";
}


$int6 = 0;
while ($int6 <= 3){
  echo "Number: $int6 <br>";
  $int6++;
}


$x = 0;
do{
  echo "The number is: $x <br>";
  $x++;
}
while($x <= 3);


$fruits = ["Apple",'Banana', "Mango"];

foreach($fruits as $fruit){
  echo "Fruit: $fruit <br>";
}



  //Example

$products = [
  ["name"=> 'Laptop', "price"=> 50000],
  ["name"=> 'Watch', "price"=> 5000],
  ["name"=> 'Mobile', "price"=> 30000],
];

foreach($products as $product){
  echo "Product: $product[name] , Price: $product[price] <br>";
}

?>