<!-- //Class-72 //Practise from codejogot documentation. -->

<?php

//Chapter-05: PHP Casting

//type casting

$number = '100.948'; //String

$intNumber = (int)$number; //Integer
var_dump($intNumber) ;

$booleanNumber = (bool)$number; //Boolean
var_dump($booleanNumber);


$float =(float)'3.1416';
var_dump($float);        //Float


$str = "PHP";

$arrValue = (array)$str;
var_dump($arrValue);       //Array


$associativeArr =  ['name'=> 'Rakib', 'age'=> 25];

$obj = (object)$associativeArr;
var_dump($obj);        //Object



//examples

$variable = true;

$va = (int)$variable;

var_dump($va);


//Real Life Examples

//Example 1: User Input Validation

$userInput = '25';  //User input

$age = (int)$userInput;    //type casting (String to Integer)

if($age >= 18){
  echo "You are eligible to vote! <br>";
}
else{
  echo "You are not eligible yet! <br>";
}


//Example 2: E-commerce Order Calculation

$price = '500';
$quantity = '3';       //User input

$totalPrice = (int)$quantity * (int)$price;

echo "Total price: $totalPrice <br>";



//Chapter-06: PHP Math


//Arethmetic operations

$a = 5;
$b = 2;

echo $a % $b  . "<br>";   //Modulas operator

echo $a ** $b . "<br>";   //Exponentiation (Power)



//Built-in math functions


echo abs(-10) . "<br>"; 

echo round(4.5) . "<br>";

echo ceil(4.1) . "<br>";

echo floor(6.8) . "<br>";

echo rand(1,100) . "<br>";

echo pow(10,2) . "<br>";

echo sqrt(25) . "<br>";

$arr = [20,4,58,10];
echo min($arr) . "<br>";
echo max($arr) . "<br>";

$numF = 1234567.89;
echo number_format($numF,8) . "<br>";


//Real Life Examples


//Example 1: E-commerce Discount Calculation

$originalPrice = 500;

$discountPercentage = 15;    //15% discount

$discountAmount = ($originalPrice * $discountPercentage) / 100;

$finalPrice = $originalPrice - $discountAmount;

echo "Discounted price: " . number_format($finalPrice, 2) . "<br>";


//Example 2: Student Grade Calculation

$marks = array(75,58,96,48,93,51);

$total = array_sum($marks);

$avarageMarks = ($total / count($marks));

echo "Avarage marks: " . round($avarageMarks,2) . "<br>";




//Chapter-07: PHP Constants



define('_SITE_NAME', 'Codejogot <br>');

echo _SITE_NAME;

const SITE_VERSION = '3.0 <br>';    //Defining contants

echo SITE_VERSION;         //Accessing constants



echo  PHP_VERSION . "<br>"; 
echo  PHP_INT_MIN . "<br>";
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";     //Predefine Constant



//Real Life example

//Example 1: Application-wide Settings

define('BASE_URL', 'https://codejogot.com');

echo "<a href='".BASE_URL."/about.php' target='_blank'>About Us</a>  <br>";




//Chapter-08: PHP Magic Constants


echo  "This is line: " . __LINE__;
echo "<br>";
echo "File Location: " . __FILE__ . "<br>";

echo __DIR__ . "<br>";


//Real life examples


//Example 1: Logging Errors with __FILE__ and __LINE__

function customErr($errMessege){
  return   "Error: $errMessege in "  . __FILE__ . ' on line ' . __LINE__ . "<br>";
}

echo customErr('Uncought type err: ');



//Chapter-09: PHP Operators


echo 10 % 3  . "<br>";  //Arethmetic operator


$xy = 10;

$xy *= 6;

echo $xy . "<br>";   //Assignment operator


if(0 || 1){
  echo "Hi there! <br>";
}
else{
  echo "Hello <br>";   
}                

if(1 <> 4){
  echo "a not equal to b <br>"; //Not equal operator(<> or !=)
}
else{
  echo "a is equal to b! <br>";  
}                                 //Logical operators
 

$a = "Hello PHP,";

$a .= ' This is amazing! <br>';

echo $a;           //String operators



echo 2 + 3  * 4  . "<br>";       //Operators Precedence



// Real Life Examples 

//Example 1: Shopping Cart Calculation 


$item_Price = 500;
$imem_quantity = 4;
$discount = 200;

$total_price = ($item_Price * $imem_quantity) - $discount;

echo "Total Price: $total_price <br>";


//Example 2: Student Grading System 

$_marks = 85;

if($_marks >= 80 && $_marks <= 100){
  echo "Grade: A+ <br>";
}
elseif($_marks >= 60 && $_marks <80){
  echo "Grade: A <br>";
}
else{
 echo "Grade: B <br>";
}




//Chapter-10: PHP Loops



for($i = 0; $i <= 5; $i++){
  echo "Count: $i <br>";           //for loop
}


$x1 = 1;

while($x1 <= 3){
  echo "Hello : $x1 <br>";
  $x1 ++;                        //while loop
}


$x2 = 1;

do{
  echo "The number is: $x2 <br>";
  $x2++;
}while($x2 <= 3);            //do...while loop



$fruits = ['Apple', "Banana","Mango"];

foreach($fruits as $fruit){
  echo "$fruit <br>";        //foreach loop
}


//Examples of loops

$sum = 0;

for($i = 0; $i <= 10; $i++){
  $sum += $i;
}

echo $sum . '<br>';       //Sum of numbers 



$i = 2;

while($i <= 10){
  echo "Even: $i <br>";

  $i += 2;             //Print even numbers
}
  


//Real Life Examples


//Example 1: Printing Multiplication Table

$number = 5;

for($i = 1; $i <= 10; $i++){
  echo "$number x $i = " . ($number * $i) . "<br>";
}


//Example 2: Display Items from an Array (Real-world example)

$products = [
  ["name"=> "Laptop", 'price'=> 45000],
  ["name"=> "Mobile", 'price'=> 3000],
  ["name"=> "Watch", 'price'=> 2500]
];

foreach($products as $product){
  echo "Product: " . $product['name'] . ", Price: " . $product["price"] . '<br>';
}




//Chapter-11: PHP Functions


function greet($para = "there!"){
 echo "Hello $para ! <br>";
}

greet("Codejogot");
greet();              //Function with default parameter



function sub($a , $b ){
  return $a - $b . "<br>";
}

echo sub(100, 25);
echo sub(10,5);      //Function with return




echo strlen('Hello world!') . "<br>";       //Built-in Functions



//Examples of functions


function interestCalculate($principal,$rate, $time){
  echo  "The interest is : " . ($principal * $rate * $time) / 100 . "<br>";
}

interestCalculate(1000,5,3);     //Simple Interest Calculation



function evenOdd($num){
  if($num % 2 == 0){
    echo "Even number <br>";
  }
  else{
    echo "Odd number <br>";
  }
}

evenOdd(5);
evenOdd(85840);       //Find Even or Odd Number



//Real Life Examples


//Example 1: User Authentication

function checkLogin($userName, $password){
      $correctUserName = "Rafi";
      $correctPassword = "431298";

    if($userName == $correctUserName && $password == $correctPassword){
      echo "Login Successful! <br>";
    }
    else{
      echo "Invalid username or password! <br>";
    }
}

checkLogin("Rafi", "431298");
checkLogin('Rakib', "431298");



//Example 2: Currency Converter

function currencyConverter($amout, $rate){
 return $amout * $rate . "Tk<br>";
}

echo currencyConverter(100,118);         //USD to BDT




//Chapter-12: PHP Arrays



$ages = ["Abdur Rahman"=> 12, "Ar-Raiyan"=> 2];  

echo $ages["Abdur Rahman"] . "<br>";   //Associative array


$multiArr = [
  's'=> [48,384,5959],
  ['abdullah' => 28],    //Creating array
  [284,584,584],
  [43=> 'number', 'string'=> 'Hello world'], 
];                         


echo $multiArr['s'][2]; //Accessing element



//Looping through an Arrays

$IndexArr = ['Apple', "Banana", "Mango"];

foreach($IndexArr as $element){
  echo $element . "<br>";
}


$associativeArr = ['Abdullah'=>23, 'Rakib'=> 13];

foreach($associativeArr as $name=> $age){
  echo "$name is $age years old! <br>";
}


// PHP Array Functions 

$numArr = [23,13,45];

echo count($numArr) . "<br>";

sort($numArr);    //Assending order
print_r($numArr) . "<br>";

rsort($numArr);
print_r($numArr) . "<br>";   //Descending order

echo array_sum($numArr) . "<br>";

array_push($numArr, 'This is last element');
print_r($numArr) . "<br>";


//Examples of arrays

$cities = ["Dhaka", "Chittagong <br>", "Khulna"];
echo $cities[1];

$employee = ["name" => "Rakib", "position" => "Developer<br>"];
echo $employee['position'];



//Real Life Examples

//Example 1: Employee Salary List 

$employees = [
  ['name'=> 'Rakib', 'salary'=> 50000],
  ['name'=> 'Rifat', 'salary'=> 40000],
  ['name'=> 'Sakib', 'salary'=> 35000]
];

foreach($employees as $employee){
  echo $employee["name"] . " earns " . $employee['salary'] ." BDT <br>";
}


//Example 2: Shopping Cart 

$cartItems = [
  ['item'=> 'Shirt', 'price'=> 1200],
  ['item'=> 'Pant', 'price'=> 1500],
  ['item'=> 'Shoe', 'price'=> 2200],
];

$total = 0;
foreach($cartItems as $item){
  $total += $item['price'];
}

echo "Total amount: $total BDT. <br>";





//Chapter-13: PHP Array: Create, Access, Add, Remove


$createArr = ['name'=> 'Rakib', 'age'=> 12];

echo $createArr['name'] . "<br>";   //Create and Access



//Adding Elements to Arrays 


//array_push() and array_unshift built-in function 

$fruitsArr1 = ['Apple', 'Banana'];

array_push($fruitsArr1, 'Mango'); 
array_unshift($fruitsArr1, 'this is first element');

print_r($fruitsArr1);

echo "<br>";


//Direct Index 

$fruitsArr2 = ['Apple', 'jack-fruit'];


$fruitsArr2[] = 'Banana';    //Adding last element

$fruitsArr2[7] = 'Cherry'; //Adding and Replacing element in specific index

print_r($fruitsArr2);

echo "<br>";


//adding element by a key 

$person = ["name"=> 'Al-Rafi'];

$person['age'] = 20;
$person['age'] = 48;     //Replace
$person['position'] = 'developer';
$person[8] = 'Monthly earning'; //Specific index
$person[] = 3848;  //last element

print_r($person);

echo "<br>";


// Removing Elements from Array

$arrRemove1 = ['Apple', "Banana", "Mango",'Cherry'];

array_pop($arrRemove1);  //remove last element
array_shift($arrRemove1);  //remove fist element
print_r($arrRemove1);
echo "<br>";


$arrRemove2 = ['name'=> 'Abdullah', 'age'=> 20, 3848, 'hello world'];

unset($arrRemove2['age']);
unset($arrRemove2[1]);
print_r($arrRemove2);      //Syntax: Unset($arr['key']) (for associative array)

echo "<br>";


//Examples

//Create, Access, Add, Remove (একত্রে)

$citiesName = ['Rajshahi','Dhaka', 'Khulna', "my_own_city"=> 'Rangpur']; //Create


echo $citiesName["my_own_city"] . "<br>";   //Access
 
array_push($citiesName, 'This is last element');
$citiesName['last_city_name'] =  'Chattragram' ;    //Add

array_shift($citiesName);
unset($citiesName["last_city_name"]);    //Remove

print_r($citiesName);
echo "<br>";

foreach($citiesName as $key => $cityName){
  echo "Key: $key, value: $cityName <br>";
}


//Real Life Examples


//Example 1: To-Do List Application

$tasks = ['Complete homework', 'Read a book'];

$tasks[] = 'Go to school';  //New task

array_shift($tasks);   //Delete completed the task

echo "Remaining tasks: <br>";

foreach($tasks as $task){
  echo "Task: $task <br>";
}


//Example 2: Shopping Cart Management

$cart = ["Laptop", "Mouse", "Keyboard"];

array_push($cart, 'Headphone');   //Add new item

unset($cart[1]);     //Remove item

foreach($cart as $item){
  echo "Item: $item <br>";   //Display user preference
}




//Chapter-14: PHP Array Functions: A Comprehensive (ব্যাপক) Guide


// Common PHP Built-in Array Functions


//1. Creating and Initializing Arrays

$arr1 = array(14,584,86);          
echo $arr1[0] . '<br>';      //Create an array


$number1 = range(1,10);      
print_r($number1);       //Create an array containing a range of element
echo "<br>";


//2. Adding and Removing Elements

$colors = array("Red", 'Green', "Blue");

array_unshift($colors, 'Yellow');
array_push($colors, "Purple");    //add

array_shift($colors);
array_pop($colors);    //remove

print_r($colors);
echo "<br>";


//3. Searching in Arrays

$fruitsArr3 = array("Apple", "Banana", "Mango");

var_dump(in_array('Banana',$fruitsArr3));     //Return boolean value
 

$index = array_search('Mango', $fruitsArr3);   //Return index
echo $index;
echo "<br>";

//Examples

if(in_array('Mango',$fruitsArr3)){
  echo "This is found! <br>";
}
else{
  echo "This is not found! <br>";
}



//4. Sorting Arrays

$arr2 = [3,8,1,4];

sort($arr2);     //Ascending 
rsort($arr2);    //Descending
print_r($arr2);

echo "<br>";


$arr3 = ["apple"=> 3,'cherry'=> 5, 'banana'=> 1, 'mango'=> 8];

ksort($arr3);     //Sorting by key
asort($arr3);   //Sorting by value

print_r($arr3);


//5. Filtering Arrays

$numbers = array(1, 2, 3, 4, 5, 6);

$filteredArr = array_filter($numbers, fn($num)=> $num % 2 === 0);

print_r($filteredArr);

echo "<br>";


//6. Merging and Combining Arrays

$arr4 = [48,5884,586];
$arr5 = ['apple','banana','mango'];

$mergedArr1 = array_merge($arr4, $arr5);  //Marge two array
print_r($mergedArr1);          
echo '<br>';

$mergedArr2 = array_combine($arr4, $arr5);   //Syntax: array_combine($keys, $values);
print_r($mergedArr2);
echo  '<br>';

//Note: array_combine দুইটি আলাদা array থেকে একটি associative array তৈরি করে



//7. Array Traversal

$number2 = array(1,2,3);

$xyz = [];
foreach($number2 as $num){
 $xyz[] = $num * 2;
}
print_r($xyz);
echo "<br>";       //foreach  loop


$returnedArr = array_map(function($num){
   return $num * 2;
   }, $number2);

print_r($returnedArr); //array_map built-in function





?>