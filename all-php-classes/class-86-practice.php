<!-- //Class 86 Practice //Practice from CodeJogot Documentation -->

<?php 

//Chapter-11: PHP Functions


function greet($name = "there!"){  //Function with default parameter
  echo "Hey! $name <br>";
}

greet("Sakib");
greet();


function sum($x , $y){
  return $x + $y;
}

echo sum(40,30);
echo "<br>";



$arr1 = [10,20,20,50];
echo array_sum($arr1);      //Built-in function
echo "<br>";


  //Example

function checklogin($username,$password){
  $correctUserName = "Rakib";
  $correctPass = "431298";
 
  if($username === $correctUserName && $password === $correctPass){
    return "Login successful. <br>";
  }
  else{
   return "Invalid username of password. <br>";
  }
}

echo checklogin("Rakib","431298");
echo checklogin("Sakib", '11194');



//Chapter-12: PHP Arrays


$arr2 = [48,49,39];   //Create and access
echo $arr2[0];
echo "<br>";

$arr3 = ["age"=> 26, "name"=> 'rakib'];
echo $arr3['name'];
echo "<br>";


$arr4 = ["rakib"=> 26,'sakib'=>'25'];

foreach($arr4 as $name => $age){
  echo "$name is $age year's old. <br>";
}


$arr5 = [2,4,1,5,8];

echo array_sum($arr5); //Array functions
echo "<br>";

array_push($arr5,'Hello');


echo count($arr5);
echo "<br>";

sort($arr5);
print_r($arr5);  //Ascending order
echo "<br>";

rsort($arr5);
print_r($arr5);  //Descending order
echo "<br>";


 //Example

$employees = [
  ["name"=>"Rakib", "salary"=>40000],
  ["name"=>"Sakib", "salary"=>25000],
  ["name"=>"Alice", "salary"=>38000]
];

foreach($employees as $employee){
  echo $employee["name"]. " earns " . $employee['salary'] . " BDT <br>";
}




//Chapter-13: PHP Array: Create, Access, Add, Remove


$arr6 = ["Apple","Banana"];
echo $arr6[0]; 
echo "<br>";           //Creating and accessing


$arr6 =  ["Apple","Banana"];

array_push($arr6, 'Mango');
array_unshift($arr6,"Jackfruit");
$arr6[] = 48;
$arr6[10] = "Hello";

print_r($arr6);       //Adding elements
echo "<br>";

$arr7 = ['name'=>"rakib"];

$arr7["position"] = "developer";  
$arr7[] = 28;

print_r($arr7);
echo "<br>";


$arr8 = ["Apple","Banana","Mango"];

array_pop($arr8);
array_shift($arr8);  //Romoving elemnts
 
print_r($arr8);
echo "<br>";


$arr9 = ["Name"=>"Rakib","Age"=>26, 48,'hello'];

unset($arr9["Age"]);
unset($arr9[0]);      //Removing element by key or specific index

print_r($arr9);
echo "<br>";



  //Example

$items = ["Laptop", "Mouse", "Keyboard"];

$items[] = "Headphone";

unset($items[1]);

foreach($items as $item){
  echo "Remaining items: $item <br>";
}

print_r($items);
echo "<br>";




//Chapter-14: PHP Array Functions: A Comprehensive Guide


  //Common array functions in PHP

$arr10 = array(
  array(30,48),
  array("hello"=> 48)
);

echo $arr10[1]["hello"];
echo "<br>";

$nums1 = range(1,10);   //Creating and Initializing arrays
print_r($nums1);
echo "<br>";



$arr11 = ["Apple","Banana","Mango"];

var_dump(in_array("Banana", $arr11));
echo "<br>";

var_dump(array_search("Mango",$arr11));  //Searching in arrays
echo "<br>";


$arr12 = [0,48,3,4];
sort($arr12);
rsort($arr12);    

print_r($arr12);
echo "<br>";

$arr13 = ["apple"=>4,"Banana"=>5,"Mango"=>1];

asort($arr13);
ksort($arr13);       //Sorting arrays

print_r($arr13);
echo "<br>";



$nums2 = range(1,5);

$newFilteredArr = array_filter($nums2, function($num){
   return $num % 2 == 0;
});

print_r($newFilteredArr);  //Filtering arrays
echo "<br>";



$arr14 = array("a","b");
$arr15 = array("x",'y');

$mergedArr = array_merge($arr14,$arr15);
print_r($mergedArr);
echo "<br>";


$combinedAssociativeArr =  array_combine($arr14,$arr15);
print_r($combinedAssociativeArr); //Merging and Combining arrays
echo "<br>";



$arr16 = range(1,8);

$newArr = array_map(function($num){
  return $num * 2;
}, $arr16);         //Array traversal

print_r($newArr);
echo "<br>";



//Chapter-15: PHP Global Variables - Superglobals


$x1 = 10;
$y1 = 20;

function sum1(){
  $GLOBALS['sum'] = $GLOBALS['x1'] + $GLOBALS['y1'];
}

sum1() ;
echo $GLOBALS['sum'] . "<br>";




echo $_SERVER["SERVER_NAME"];
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";

echo $_SERVER["REQUEST_METHOD"];    //$_SERVER
echo "<br>";


if($_SERVER["REQUEST_METHOD"] == 'POST'){
  echo "Username: " . $_REQUEST['username'] . "<br>";
  echo "Password: " . $_POST['password'] . "<br>";
  echo "It's a post method <br>";
}
else{
  echo "Password: " . $_GET['password'] . "<br>";
  echo "It's get method. <br>";
}




session_start();
$_SESSION['email'] = 'life@gmai.com';
echo "User name:" . $_SESSION['email'] . "<br>";



//Chapter-16: PHP Regular Expressions (RegEx)


$pattern1  = '/php/i';
$text1 = "PHP, Javascript, php, Laravel pHp";

if(preg_match($pattern1, $text1)){     //RegEx functions
  echo "Found! <br>";
}
else{
  echo "Not found! <br>"; 
}


preg_match_all($pattern1, $text1, $matches1);
print_r($matches1);
echo "<br>";


$pattern2 = '/mango/i';
$text2 = "Apple, Banana, Mango <br>";

$replaceText = preg_replace($pattern2,'Jackfruit', $text2);
echo $replaceText;

$newArr2 = preg_split('/,/',$text2);
print_r($newArr2) ;
echo "<br>";



 //Examples


 $email = "lifeslow123@gmail.com";
 $patternEmail = '/^[a-zA-Z0-9$%_$&-]+@[a-zA-Z0-9_]+\.[a-zA-Z]{2,30}$/';

 if(preg_match($patternEmail, $email)){
  echo "Valid email. <br>";
 }
 else{
  echo "Invalid <br>";
 }


 $phoneNumber = "+8801897774506";
 $pattern3 = '/^\+?\d{10,15}$/';

 if(preg_match($pattern3, $phoneNumber)){
  echo "Valid Phone Number <br>";
 }
 else{
  echo "Invalid Phone Number <br>";
 }


$text4 = "Hell    world!        PHP is   awosome.";

$cleanText = preg_replace("/\s+/", ' ', $text4);
echo $cleanText;
echo "<br>";




//Chapter-17: PHP Form Handling

   
 //Go to  "class-86-html-process-practice.php" and "class-86-process-practice.php" to see the code of this chapter.

 


 //Chapter-18: PHP Form Validation




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1>$_REQUEST</h1>
 
<form method="GET" >
  <input type="text" name="username"> <br> <br>

  <input type="password" name="password">

 

  <input type="submit" value="Submit">
</form>
</body>
</html>